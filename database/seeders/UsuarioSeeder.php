<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("usuarios")->insert([
            [
                "nome" => "bruna Miyamoto",
                "email" => "bruna@senac.com",
                "password" => Hash::make("12345678"),
                "cpf" => "449.054.968-70",
                "dt_nasc" => "1998-03-01",

                "perfil" => "usuário",
                "cep" => "13214-120",
                "rua" => "Rua das Palmeiras",
                "bairro" => "Jardim Paulista",
                "numero" => "245",
                "cidade" => "Jundiaí",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}