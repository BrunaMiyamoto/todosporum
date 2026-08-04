@extends('layouts.site')

@section('conteudo')
    <div class="max-w-7xl mx-auto py-8 px-5 font-sans">
        <div class="titulosecao">
            <h2 class="text-start text-[#05668D] pt-4 font-bold text-xl">ARTIGO</h2>
            <h3 class="font-bold py-4 text-sm">Controle Social e Cidadania: Como Fiscalizar o Poder Público.</h3>
            <p class="text-sm text-[#8d8c8c]">Escrito por: Artigo teste feito por Inteligência Artificial</p>
            <p class="border-b-2 border-[#05668D] pb-5 max-w-7xl mx-auto text-sm text-[#8d8c8c]">Publicado em: 04/08/2026</p>

        </div>

        <div class="grid grid-cols-1 gap-5 sm:grid-cols-[1fr_1fr] mx-auto">
            <div class="pt-8 text-justify text-sm ">
                <p class="pb-3">
                    Imagine contratar um funcionário para gerenciar a sua empresa e só olhar o trabalho dele quatro anos
                    depois. Parece arriscado, certo? No entanto, é exatamente isso o que fazemos quando nos limitamos a
                    votar no dia da eleição e ignorar a política até o próximo pleito.

                    O exercício da política no cotidiano chama-se Controle Social. É o direito e o dever da sociedade civil
                    de acompanhar, fiscalizar e transformar a gestão pública. Para garantir que qualquer pessoa exerça esse
                    papel, a legislação brasileira criou mecanismos fundamentais:
                </p>
                <p class="pb-3">
                    <strong>1. A Lei de Acesso à Informação (LAI - Lei 12.527/2011): </strong>
                    A regra no Brasil é clara: o sigilo é a exceção, a transparência é a regra. Qualquer cidadão tem o
                    direito de solicitar documentos públicos, saber quanto custou uma obra, pedir relatórios de atendimentos
                    em postos de saúde ou checar a frequência dos servidores públicos. As prefeituras têm prazos legais
                    rígidos para responder aos pedidos de informação encaminhados pelo e-SIC (Sistema de Informação ao
                    Cidadão).
                </p>
                <p class="pb-3">
                    <strong>2. Os Portais da Transparência: </strong>
                    Por lei, todos os municípios devem manter sites atualizados mostrando, em tempo real:

                    Quanto a prefeitura arrecada em impostos;

                    Onde e com quem esse dinheiro está sendo gasto (contratos, licitações e salários);

                    A destinação de verbas para o combate às desigualdades (educação inclusiva, programas sociais,
                    saneamento).
                </p>

                <p class="">
                    <strong>3. Audiências Públicas: </strong>
                    São reuniões oficiais e abertas organizadas pelo Poder Público (Câmara ou Prefeitura) antes de tomar
                    decisões importantes — como o planejamento do orçamento do município (PPA, LDO e LOA) ou grandes
                    intervenções urbanas. Qualquer pessoa pode inscrever-se para falar, questionar o gestor público e
                    apresentar propostas.
                </p>


            </div>
            <div class="pt-9">

                <img src={{ asset('assets/img/photo-1573164713714-d95e436ab8d6.avif') }}
                    class=" mx-auto max-h-80 w-full flex-shrink-0" alt="Imagem de Barack Obama em ligação" />
                <p class="text-justify text-sm pt-3">
                    <strong>4. Fóruns e Conselhos Municipais: </strong>
                    Existem Conselhos de Direitos (como o Conselho de Saúde, da Mulher, da Criança e do Adolescente)
                    formados por representantes do governo e da sociedade civil. A participação ativa nesses espaços garante
                    que as demandas das minorias e dos bairros vulneráveis cheguem ao centro das decisões.

                    Ao utilizar esses instrumentos, o cidadão deixa de ser um mero espectador da política e passa a ser
                    agente ativo da transformação social.
                </p>
            </div>
        </div>
    </div>
@endsection
