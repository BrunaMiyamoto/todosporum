@extends('layouts.site')

@section('conteudo')
    <div class="max-w-7xl mx-auto py-8 px-5 font-sans">
        <div class="titulosecao">
            <h2 class="text-start text-[#05668D] pt-4 font-bold text-xl">ARTIGO</h2>
            <h3 class="font-bold py-4 text-sm">Projeto de Lei de Iniciativa Popular: Como Mobilizar a Cidade.</h3>
            <p class="text-sm text-[#8d8c8c]">Escrito por: Artigo teste feito por Inteligência Artificial</p>
            <p class="border-b-2 border-[#05668D] pb-5 max-w-7xl mx-auto text-sm text-[#8d8c8c]">Publicado em: 04/08/2026</p>

        </div>

        <div class="grid grid-cols-1 gap-5 sm:grid-cols-[1fr_1fr] mx-auto">
            <div class="pt-8 text-justify text-sm ">
                <p class="pb-3">
                    Imagine a seguinte cena: o condomínio onde você mora tem um regulamento antigo que prejudica os
                    moradores do bloco dos fundos. Em vez de esperar passivamente que o síndico ou a comissão decidam mudar,
                    a própria vizinhança elabora um abaixo-assinado formal. Atingindo certo número de assinantes, a pauta
                    tem que ser votada na assembleia.

                    Na escala de um município, esse direito é garantido pela Constituição Federal (Art. 29, XIII) e recebe o
                    nome de Iniciativa Popular. É a prova viva de que a democracia no Brasil não é apenas indireta (onde
                    apenas votamos nos outros), mas também participativa.
                </p>
                <p class="pb-3">
                    <strong>Quais são as regras para valer oficialmente?</strong>
                    Como se trata de uma norma oficial, a lei exige o cumprimento de alguns requisitos formais para evitar
                    fraudes:

                    Percentual de Eleitores: A regra geral exige o apoio de, no mínimo, 5% do eleitorado do município. Em
                    uma cidade de 100 mil eleitores, por exemplo, são necessárias 5.000 assinaturas válidas.

                    Dados Obrigatórios: Cada assinatura precisa vir acompanhada do nome completo, endereço, número do Título
                    de Eleitor e Zona/Seção eleitoral do cidadão para comprovar que ele realmente vota naquele município.

                    Pauta Única e Clara: A proposta precisa se limitar a um assunto de interesse específico do município ou
                    do bairro (ex: saúde básica, transporte, meio ambiente local).
                </p>
                <p class="pb-3">
                    <strong>O papel da tecnologia e das redes no Todos por Um</strong>
                    Historicamente, juntar milhares de assinaturas no papel de prancheta era um desafio gigantesco que
                    desencorajava a população. Contudo, com a evolução dos debates comunitários em plataformas digitais e
                    fóruns de colaboração, hoje é possível:

                    Coordenar voluntários por bairros;

                    Debater e aprimorar o texto da lei coletivamente antes da coleta;

                    Utilizar ferramentas digitais para engajar a sociedade e alcançar o quórum necessário com transparência.

                    Quando a população entrega um Projeto de Iniciativa Popular na Câmara, ele recebe prioridade de
                    tramitação e demonstra a força da vontade coletiva!
                </p>


            </div>
            <div class="pt-9">

                <img src={{ asset('assets/img/photo-1529107386315-e1a2ed48a620.avif') }}
                    class=" mx-auto max-h-96 flex-shrink-0" alt="Imagem de Barack Obama em ligação" />

            </div>
        </div>
    </div>
@endsection
