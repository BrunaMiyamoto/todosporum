<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aprenda_sobre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AprendaSobreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aprendaPost = Aprenda_sobre::all();
        return view("admin.aprendaSobre.index", [
            "aprendaPost" => $aprendaPost
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.aprendaSobre.cadastrar", [
            "aprendaPost" => new Aprenda_sobre()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "autor" => "required|max:100",
            "titulo" => "required|min:10|max:255",
            "resumo" => "required",
            "conteudo" => "required",
            "tipo" => "required|max:45",
            "imagem" => "image|mimes:jpge,jpg,png,webp|max:2048",
            "videos" => "mimes:mp4,mov,avi,wmv,mkv|max:20480"
        ]);

        $aprendaPost = new Aprenda_sobre();

        $aprendaPost->titulo = $request->titulo;
        $aprendaPost->resumo = $request->resumo;
        $aprendaPost->conteudo = $request->conteudo;
        $aprendaPost->tipo = $request->tipo;
        $aprendaPost->autor = $request->autor;
        $aprendaPost->usuario_id = Auth::user()->id;


        if ($request->hasFile("imagem")) {
            $aprendaPost->imagem = $request->file("imagem")->store("aprendaPost", "public");
        }
        if ($request->hasFile("videos")) {
            $aprendaPost->videos = $request->file("videos")->store("aprendaPost", "public");
        }

        $aprendaPost->save();

        return redirect()->route("admin.aprendaSobre.index");
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
        $aprendaPost = Aprenda_sobre::findOrFail($id);

        return view("admin.aprendaSobre.editar", [
            "aprendaPost" => $aprendaPost
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "autor" => "required|max:100",
            "titulo" => "required|min:10|max:255",
            "resumo" => "required",
            "conteudo" => "required",
            "tipo" => "required|max:45",
            "imagem" => "image|mimes:jpge,jpg,png,webp|max:2048",
            "videos" => "mimes:mp4,mov,avi,wmv,mkv|max:20480"
        ]);

        $aprendaPost = Aprenda_sobre::findOrFail($id);

        $aprendaPost->titulo = $request->titulo;
        $aprendaPost->resumo = $request->resumo;
        $aprendaPost->conteudo = $request->conteudo;
        $aprendaPost->tipo = $request->tipo;
        $aprendaPost->autor = $request->autor;
        $aprendaPost->usuario_id = Auth::user()->id;


        if ($request->hasFile("imagem")) {
            $aprendaPost->imagem = $request->file("imagem")->store("aprendaPost", "public");
        }
        if ($request->hasFile("videos")) {
            $aprendaPost->videos = $request->file("videos")->store("aprendaPost", "public");
        }

        $aprendaPost->save();

        return redirect()->route("admin.aprendaSobre.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aprendaPost = Aprenda_sobre::findOrFail($id);
        $aprendaPost->delete();
        return redirect()->route("admin.aprendaSobre.index");
    }
}