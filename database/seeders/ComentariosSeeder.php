<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentariosSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('comentarios')->insert(
      [

        [
          'conteudo'  => 'Concordo totalmente. Passei por essa avenida ontem e a situação está crítica.',
          "created_at" => now(),
          "updated_at" => now(),
          'usuario_id' => '1',
          'postagem_id' => '1'
        ],

        [
          'conteudo'  => 'Você pode fazer a solicitação diretamente pelo portal da prefeitura.',
          "created_at" => now(),
          "updated_at" => now(),
          'usuario_id' => '1',
          'postagem_id' => '1'

        ]
      ]
    );
  }
}