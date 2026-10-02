<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Postagem;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagens = Postagem::where("usuario_id", Auth::id())->with("tags", "curtidas")->orderByDesc('updated_at')->paginate(3);
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
            "postagens" => new Postagem(),
            "tags" => Tag::all()
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
            "tags" => "required|array|min:1",

        ]);

        $postagens = new Postagem();

        $postagens->titulo = $request->titulo;
        $postagens->conteudo = $request->conteudo;
        $postagens->categorias = $request->categorias;
        $postagens->usuario_id = Auth::user()->id;



        $postagens->save();

        $postagens->tags()->sync($request->tags ?? []);

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
            "postagens" => $postagens,
            "tags" => Tag::all()
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
            "tags" => "required|array|min:1",


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

        $postagens->tags()->sync($request->tags ?? []);

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

        $postagens->tags()->detach();
        $postagens->delete();


        return redirect()->route("admin.postagem.index");
    }

    public function moderacao()
    {

        $postagens = Postagem::with("tags", "usuario", "curtidas")->orderByDesc('updated_at')->paginate(10);

        return view("admin.postagem.moderacao", [
            "postagens" => $postagens
        ]);
    }


    public function curtir(string $id)
    {
        $postagem = Postagem::findOrFail($id);

        if ($postagem->curtidas()->where("usuario_id", Auth::id())->exists()) {
            $postagem->curtidas()->detach(Auth::id());
        } else {
            $postagem->curtidas()->attach(Auth::id());
        }
        return back();
    }
}
