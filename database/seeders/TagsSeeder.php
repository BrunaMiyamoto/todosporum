<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            [
                'nome' => ' Educação'
            ],
            [
                'nome' => 'Infraestrutura'
            ],
            [
                'nome' => 'Sutentaabilidade'
            ],
            [
                'nome' => 'Política'
            ],
            [
                'nome' => 'Tecnologia'
            ],
            [
                'nome' => 'Cidadania'
            ],
            [
                'nome' => 'Saude'
            ],
            [

                'nome' => 'Lazer'
            ],
            [
                'nome' => 'Seguranca'
            ],
            [
                'nome' => 'Empregabilidade'
            ],
            [
                'nome' => 'Administração'
            ],
            [
                'nome' => 'Transporte'
            ],
            [
                'nome' => 'DireitosHumanos'
            ],
            [
                'nome' => 'Planejamento',
            ],
            [
                'nome' => 'MaisVotos'
            ],
            [
                'nome' => 'MaisComentados'
            ]
        ]);
    }
}