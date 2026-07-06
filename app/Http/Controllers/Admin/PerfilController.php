<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Pest\Support\View;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perfil = User::all();
        return view("admin.perfil.index", [
            "perfil" => $perfil
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nome" => "required",
            'nome_social' => "nullable",
            'genero' => "nullable",
            'contato' => "required|min:10",
            'cep' => "nullable",
            'rua' => "nullable",
            'bairro' => "nullable",
            'numero' => "nullable",
            'cidade' => "nullable",
            "nome_usuario" => "required",
            "descricao" => "nullable",
            "imagem" => "image|mimes:jpge,jpg, png,webp|max:2048"

        ]);


        $perfil = new User();

        $perfil->nome = $request->nome;
        $perfil->nome_social = $request->nome_social;
        $perfil->genero = $request->genero;
        $perfil->contato = $request->contato;
        $perfil->cep = $request->cep;
        $perfil->rua = $request->rua;
        $perfil->bairro = $request->bairro;
        $perfil->numero = $request->numero;
        $perfil->cidade = $request->cidade;
        $perfil->nome_usuario = $request->nome_usuario;
        $perfil->descricao = $request->descricao;

        if ($request->hasFile("imagem")) {
            $perfil->imagem = $request->file("imagem")->store("foto_perfil", "public");
        }

        $perfil->save();
        return redirect()->route("admin.perfil.index");
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

        $perfil = User::findOrFail($id);

        return view("admin.perfil.editar", [
            "perfil" => $perfil
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "nome" => "required",
            'nome_social' => "nullable",
            'genero' => "nullable",
            'contato' => "required|min:10",
            'cep' => "nullable",
            'rua' => "nullable",
            'bairro' => "nullable",
            'numero' => "nullable",
            'cidade' => "nullable",
            "nome_usuario" => "required",
            "descricao" => "nullable",
            "imagem" => "image|mimes:jpge,jpg, png,webp|max:2048"

        ]);


        $perfil = User::findOrFail($id);

        $perfil->nome = $request->nome;
        $perfil->nome_social = $request->nome_social;
        $perfil->genero = $request->genero;
        $perfil->contato = $request->contato;
        $perfil->cep = $request->cep;
        $perfil->rua = $request->rua;
        $perfil->bairro = $request->bairro;
        $perfil->numero = $request->numero;
        $perfil->cidade = $request->cidade;
        $perfil->nome_usuario = $request->nome_usuario;
        $perfil->descricao = $request->descricao;

        if ($request->hasFile("imagem")) {

            if ($perfil->imagem) {
                Storage::disk("public")->delete($perfil->imagem);
            }

            $perfil->imagem = $request->file("imagem")->store("foto_perfil", "public");
        }

        $perfil->save();
        return redirect()->route("admin.perfil.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
