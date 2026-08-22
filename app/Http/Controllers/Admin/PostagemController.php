<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Postagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagens = Postagem::where("usuario_id", Auth::id())->orderByDesc('updated_at')->paginate(3);
        return view("admin.postagem.index", [
            "postagens" => $postagens
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.postagem.cadastrar", [
            "postagens" => new Postagem()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            "titulo" => "required|min:10|max:255",
            "categorias" => "required|max:50",
            "conteudo" => "required",

        ]);

        $postagens = new Postagem();

        $postagens->titulo = $request->titulo;
        $postagens->conteudo = $request->conteudo;
        $postagens->categorias = $request->categorias;
        $postagens->usuario_id = Auth::user()->id;



        $postagens->save();

        return redirect()->route("admin.postagem.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postagens = Postagem::findOrFail($id);

        if ($postagens->usuario_id !== Auth::id() && !in_array(Auth::user()->perfil, ['moderador', 'admin'])) {
            abort(403, 'Você não tem permissão para editar esta postagem');
        }

        return view("admin.postagem.editar", [
            "postagens" => $postagens
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            "titulo" => "required|min:10|max:255",
            "categorias" => "required|max:50",
            "conteudo" => "required",


        ]);

        $postagens = Postagem::findOrFail($id);

        if ($postagens->usuario_id !== Auth::id() && !in_array(Auth::user()->perfil, ['moderador', 'admin'])) {
            abort(403, 'Você não tem permissão para editar esta postagem');
        }

        $postagens->titulo = $request->titulo;
        $postagens->conteudo = $request->conteudo;
        $postagens->categorias = $request->categorias;
        // $postagens->usuario_id = Auth::user()->id;



        $postagens->save();

        return redirect()->route("admin.postagem.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postagens = Postagem::findOrFail($id);

        if ($postagens->usuario_id !== Auth::id() && !in_array(Auth::user()->perfil, ['moderador', 'admin'])) {
            abort(403, 'Você não tem permissão para deletar esta postagem');
        }
        $postagens->delete();
        return redirect()->route("admin.postagem.index");
    }

    public function moderacao()
    {

        $postagens = Postagem::orderByDesc('updated_at')->paginate(10);

        return view("admin.postagem.moderacao", [
            "postagens" => $postagens
        ]);
    }
}