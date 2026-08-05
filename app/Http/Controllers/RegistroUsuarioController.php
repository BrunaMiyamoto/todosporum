<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

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
            'nome'            => 'required|string|max:50',
            'email'           => 'required|email|unique:usuarios,email',
            'contato'         => 'required',
            'datanascimento'  => 'required|date',
            'cpf'             => 'required',
            'senha'           => 'required|min:6',
            'confirmarsenha'  => 'required|same:senha', 
        ], [
            
            'email.unique'         => 'Este e-mail já está cadastrado.',
            'confirmarsenha.same'  => 'As senhas digitadas não são iguais.',
        ]);

        $usuario = new User();

        $usuario->nome        = $request->nome;
        $usuario->nome_social = $request->nomesocial;
        $usuario->email       = $request->email;
        $usuario->contato     = $request->contato;
        $usuario->dt_nasc     = $request->datanascimento; 
        $usuario->cpf         = $request->cpf;
        $usuario->password    = Hash::make($request->senha); 

        
        $usuario->perfil      = 'usuário';

        $usuario->save();

        
        return redirect()->route('login')->with('sucesso', 'Conta criada com sucesso! Faça seu login.');
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
