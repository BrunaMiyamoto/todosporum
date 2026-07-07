<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagensSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('postagens')->insert([
      [
        'titulo' => 'Plataforma Conecta Voluntários a Projetos Sociais no Brasil',
        'likes' => '5.000',
        'categorias' => 'projeto',
        'conteudo' => 'O projeto Todos por Um lançou uma plataforma integrada que une pessoas com disposição para ajudar e instituições que precisam de suporte. O sistema cruza as habilidades do voluntário com as necessidades da ONG, otimizando o impacto das ações sociais por todo o país.',
        "created_at" => now(),
        "updated_at" => now(),
        'usuario_id' => '1',

      ],
      [
        'titulo' => 'Mutirão de Inclusão Digital Capacita Jovens da Periferia',
        'likes ' => '5.000',
        'categoria' => 'projeto de capacitação tecnologico',
        'conteudo' => 'Com o objetivo de reduzir o abismo tecnológico, a iniciativa reuniu mentores da área de tecnologia para ministrar oficinas intensivas de código e IA. Os participantes saem do projeto prontos para disputar as primeiras vagas em um mercado de trabalho cada vez mais digital.',
        "created_at" => now(),
        "updated_at" => now(),
        'usuario_id' => '1',

      ]
    ]);
  }
}