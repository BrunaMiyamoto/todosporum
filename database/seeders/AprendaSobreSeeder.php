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
                "autor" => "Artigo teste feito por Inteligência Artificial",
                "titulo" => "A Receita da Mudança: Como Estruturar um Projeto de Lei do Zero",
                "conteudo" => "Já teve uma ideia incrível para melhorar o seu bairro, mas achou que transformar essa proposta em lei era algo exclusivo para políticos e advogados? A verdade é que criar um Projeto de Lei é um processo muito parecido com seguir uma receita de bolo. Para que a sua demanda comunitária saia do papel e seja analisada na Câmara Municipal, ela precisa ser estruturada em partes fundamentais: a ementa, os artigos com o detalhamento das regras, a previsão de impacto orçamentário e uma justificativa sólida embasada nos problemas reais da sua região. Entenda a lógica por trás da técnica legislativa e descubra como traduzir os anseios da sua rua em normas jurídicas claras e eficientes.",
                "resumo" => "Não precisa ser jurista para propor soluções para a sua cidade. Aprenda os elementos fundamentais de um Projeto de Lei e como construir uma justificativa sólida para resolver problemas reais.",
                "imagem" => "photo-1541872703-74c5e44368f9.avif",
                "videos" => null,
                "tipo" => "artigo",
                "created_at" => now(),
                "updated_at" => now(),
                "usuario_id" => "1",
            ],


            [
                "autor" => "Artigo teste feito por Inteligência Artificial",
                "titulo" => "Projeto de Lei de Iniciativa Popular: Como Mobilizar a Cidade",
                "conteudo" => "A Constituição Federal garante que o poder de criar leis não pertence apenas aos vereadores e ao prefeito, mas também à própria população. Por meio do Projeto de Lei de Iniciativa Popular, a comunidade pode elaborar uma proposta e apresentá-la diretamente no Legislativo local. Para que o documento tenha validade jurídica oficial, é necessário cumprir requisitos formais, como a coleta de assinaturas de pelo menos 5% do eleitorado do município, acompanhadas dos dados do título de eleitor. Com o suporte de fóruns digitais e redes de colaboração comunitária, organizar esses movimentos cívicos e alcançar o quórum necessário ficou muito mais acessível, permitindo que a voz do seu bairro chegue com força total à mesa de votação.",
                "resumo" => "A Constituição Federal garante ao povo o poder de legislar diretamente. Descubra os requisitos formais de coleta de assinaturas e como organizar um movimento cívico eficaz.",
                "imagem" => "photo-1529107386315-e1a2ed48a620.avif",
                "videos" => null,
                "tipo" => "artigo",
                "created_at" => now(),
                "updated_at" => now(),
                "usuario_id" => "1",
            ],


            [
                "autor" => "Artigo teste feito por Inteligência Artificial",
                "titulo" => "Da Ideia à Sanção: O Caminho de um Projeto na Câmara Municipal",
                "conteudo" => "O que acontece exatamente com uma proposta legislativa após ser entregue na Câmara de Vereadores? Entender a tramitação de uma lei é essencial para saber o momento certo de cobrar e apoiar os seus representantes. O processo funciona como um rigoroso controle de qualidade: primeiro, o texto passa pela triagem jurídica da Comissão de Constituição e Justiça (CCJ), segue para as comissões temáticas de saúde, educação e finanças, e só então é levado ao plenário para debate e votação de todos os vereadores. Se aprovado, o projeto é enviado ao Prefeito, que pode sancionar a nova lei ou aplicar um veto, o qual ainda pode ser derrubado pelo próprio Legislativo.",
                "resumo" => "O que acontece depois que uma proposta chega ao Legislativo? Acompanhe cada etapa da tramitação e saiba exatamente quando cobrar posicionamento dos parlamentares.",
                "imagem" => "photo-1577495508048-b635879837f1.avif",
                "videos" => null,
                "tipo" => "artigo",
                "created_at" => now(),
                "updated_at" => now(),
                "usuario_id" => "1",
            ],


            [
                "autor" => "Artigo teste feito por Inteligência Artificial",
                "titulo" => "Controle Social e Cidadania: Como Fiscalizar o Poder Público",
                "conteudo" => "O exercício da cidadania e da democracia não se encerra no momento em que digitamos o número do candidato na urna eletrônica. O verdadeiro acompanhamento da gestão pública acontece no dia a dia por meio do Controle Social. Todo cidadão possui o direito e o dever de monitorar a aplicação das verbas públicas e a atuação dos vereadores e do prefeito. Ferramentas legais poderosas como a Lei de Acesso à Informação (LAI), os Portais da Transparência, as Audiências Públicas e os Conselhos Municipais existem justamente para garantir que você possa solicitar documentos, fiscalizar licitações de obras e participar diretamente das decisões que afetam a qualidade de vida da sua comunidade.",
                "resumo" => "A democracia não se esgota nas urnas. Conheça as Audiências Públicas, a Lei de Acesso à Informação e o Portal da Transparência como ferramentas de transformação social.",
                "imagem" => "photo-1573164713714-d95e436ab8d6.avif",
                "videos" => null,
                "tipo" => "artigo",
                "created_at" => now(),
                "updated_at" => now(),
                "usuario_id" => "1",
            ],


            [
                "autor" => "Artigo teste feito por Inteligência Artificial",
                "titulo" => "De Onde Vem e Para Onde Vai o Dinheiro da Sua Cidade?",
                "conteudo" => "O orçamento municipal é o verdadeiro mapa estratégico de uma cidade, pois é nele que se define quais bairros receberão investimentos prioritários e quais pautas correm o risco de ser esquecidas. A distribuição de recursos da prefeitura não ocorre de forma improvisada; ela é regida por três leis fundamentais: o Plano Plurianual (PPA), a Lei de Diretrizes Orçamentárias (LDO) e a Lei Orçamentária Anual (LOA). Compreender como essas leis são elaboradas e participar das audiências públicas do Orçamento Participativo é o caminho mais eficaz para garantir que o dinheiro arrecadado através dos seus impostos seja destinado ao combate às desigualdades sociais e à melhoria dos serviços essenciais.",
                "resumo" => "Entenda o orçamento municipal e aprenda como o Plano Plurianual, a LDO e a LOA definem os investimentos no seu bairro.",
                "imagem" => "capa.png",
                "videos" => null,
                "tipo" => "artigo",
                "created_at" => now(),
                "updated_at" => now(),
                "usuario_id" => "1",
            ],


            [
                "autor" => "Artigo teste feito por Inteligência Artificial",
                "titulo" => "Mulheres e Representatividade na Política Local: Por Que Isso Importa?",
                "conteudo" => "Apesar de as mulheres representarem mais de metade da população brasileira, a sua presença nas cadeiras das Câmaras Municipais e nos cargos executivos ainda é historicamente desproporcional. A falta de representatividade feminina e de minorias nos espaços de tomada de decisão afeta diretamente a formulação das políticas públicas locais. Quando mulheres e lideranças comunitárias ocupam cargos políticos ou participam ativamente da criação de projetos de lei, a pauta da cidade se amplia para incluir ações prioritárias de combate à violência de gênero, ampliação da rede de creches, saúde preventiva e iluminação pública voltada para a segurança nos pontos de ônibus.",
                "resumo" => "A importância da representatividade feminina na formulação de políticas públicas locais e no combate às desigualdades sociais.",
                "imagem" => "capa.png",
                "videos" => null,
                "tipo" => "artigo",
                "created_at" => now(),
                "updated_at" => now(),
                "usuario_id" => "1",
            ],
        ]);
    }
}
