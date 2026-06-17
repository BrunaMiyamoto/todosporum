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
      DB::table('comentarios')->insert([
        [
            'id'=> 1,
            'nome'=>' Teste User'
        ],
        [
            'id'=> 2,
            'nome'=> 'Usuario Teste'
        ]
        ]);
    }
}
