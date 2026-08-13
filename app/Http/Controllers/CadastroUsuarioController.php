<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CadastroUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cadastro-form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nome" => "required",
            "nome_social" => "nullable",
            'contato' => "required|min:10",
            "email" => "required",
            "cpf" => "required|min:11",
            "dt_nasc" => "required|date",
            "password" => "required|min:8"

        ]);

        $cadastro = new User();

        $cadastro->nome = $request->nome;
        $cadastro->nome_social = $request->nome_social;
        $cadastro->contato = $request->contato;
        $cadastro->email = $request->email;
        $cadastro->cpf = $request->cpf;
        $cadastro->dt_nasc = $request->dt_nasc;
        $cadastro->password = Hash::make($request->password);
        $cadastro->perfil = "usuario";

        $cadastro->save();
        return redirect()->route("login");
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}