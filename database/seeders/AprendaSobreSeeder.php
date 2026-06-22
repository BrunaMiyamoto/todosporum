<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AprendaSobreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aprenda_sobres')->insert([
            [
                "dt_publi" => now(),
                "autor" => "Ana Martins",
                "titulo" => "Introdução à Participação Cidadã",
                "conteudo" => "Plataformas digitais permitem que cidadãos acompanhem gastos públicos, projetos em andamento e indicadores governamentais. A transparência fortalece a confiança entre população e administração pública.",
                "capa" => "capa.png",
                "resumo" => "Veja como a tecnologia pode aumentar a transparência na gestão pública.",
                "videos" => "video.mp4",
                "tipo" => "artigo",
                "usuario_id" => "1",
            ],
        ]);
    }
}
