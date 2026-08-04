@extends('layouts.site')

@section('conteudo')
    <div class="max-w-7xl mx-auto py-8 px-5 font-sans">
        <div class="titulosecao">
            <h2 class="text-start text-[#05668D] pt-4 font-bold text-xl">ARTIGO</h2>
            <h3 class="font-bold py-4 text-sm">De Onde Vem e Para Onde Vai o Dinheiro da Sua Cidade?</h3>
            <p class="text-sm text-[#8d8c8c]">Escrito por: Artigo teste feito por Inteligência Artificial</p>
            <p class="border-b-2 border-[#05668D] pb-5 max-w-7xl mx-auto text-sm text-[#8d8c8c]">Publicado em: 04/08/2026</p>

        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-[1fr_1fr] mx-auto">
            <div class="pt-8 text-justify text-sm ">
                <p class="pb-3">
                    Imagine o orçamento da sua família: no início do mês, vocês somam os rendimentos (salários, rendas
                    extra) e decidem como esse dinheiro será dividido — quanto vai para o aluguel, alimentação, saúde,
                    educação e quanto sobra para lazer ou reformas.

                    A prefeitura faz exatamente a mesma coisa, só que em uma escala de milhões ou bilhões de reais. Esse
                    planejamento financeiro não é feito de forma aleatória; ele é estruturado em três leis orçamentárias
                    principais que decidem onde cada centavo dos seus impostos (como IPTU e ISS) será investido:
                </p>
                <p class="pb-3">
                    <strong>1. Plano Plurianual (PPA) — O Planejamento de Longo Prazo: </strong>
                    O PPA é o planejamento estratégico da cidade para um período de quatro anos. Ele define as grandes metas
                    da gestão (por exemplo: "construir 5 novos postos de saúde e asfaltar 20 bairros"). O PPA é aprovado no
                    primeiro ano de mandato do prefeito e vale até o primeiro ano do mandato seguinte.
                </p>
                <p class="pb-3">
                    <strong>2. Lei de Diretrizes Orçamentárias (LDO) — A Sintonia Fina: </strong>
                    A LDO é elaborada anualmente e serve como uma ponte entre o plano de longo prazo (PPA) e o orçamento do
                    ano seguinte. Ela define quais serão as prioridades e metas para o ano que vem, ajustando as
                    expectativas financeiras da prefeitura à realidade do momento.
                </p>

                <p class="">
                    <strong>3. Lei Orçamentária Anual (LOA) — O Cheque em Branco do Município: </strong>
                    A LOA é o orçamento propriamente dito. É a estimativa exata de toda a arrecadação da cidade para o ano
                    seguinte e a autorização de onde esse dinheiro será aplicado (quanto vai para a Secretaria de Educação,
                    Secretaria de Obras, Saúde, etc.). Nenhuma obra ou projeto pode ser executado se não estiver previsto na
                    LOA.
                </p>


            </div>
            <div class="pt-9">

                <img src={{ asset('assets/img/photo-1554224155-8d04cb21cd6c.avif') }}
                    class=" mx-auto max-h-72 w-full flex-shrink-0" alt="Imagem de Barack Obama em ligação" />

                <p class="text-justify text-sm pt-3">
                    <strong>Como o cidadão pode intervir? </strong>
                    Por lei (Lei de Responsabilidade Fiscal), as prefeituras são obrigadas a realizar Audiências
                    Públicas antes de enviar esses projetos de lei para a Câmara Municipal.

                    É nesses encontros — e nos debates promovidos em fóruns como o Todos por Um — que a população de
                    bairros periféricos ou vulneráveis pode exigir o Orçamento Participativo, garantindo que a verba
                    pública seja distribuída de forma justa para reduzir desigualdades sociais e infraestruturais.
                </p>

            </div>
        </div>
    </div>
@endsection
