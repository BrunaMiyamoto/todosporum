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
        DB::table('usuarios')->insert([
            [
                "nome" => "Mariana Alves Costa",
                "email" => "mariana.costa98@email.com",
                "password" => Hash::make("1234567"),
                "cpf" => "572.747.848-03",
                "dt_nasc" => "1998 - 03 - 01",

                "perfil" => "usuário",
                "cep" => "13214-120",
                "rua" => "Rua das Palmeiras",
                "bairro" => "Jardim Paulista",
                "numero" => "245",
                "cidade" => "Jundiaí",
            ]
        ]);
    }
}
