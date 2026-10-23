@extends('layouts.site')

@section('conteudo')
    <div class="max-w-7xl mx-auto px-5 py-14 mt-7">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

            <div class="text-justify">
                <h1 class="text-[#05668d] text-start pb-6 lg:pb-10 font-bold text-3xl">SOBRE O PROJETO</h1>
                <p class="space-y-4">
                    O Todos Por Um nasceu como uma iniciativa de estudantes de um curso
                    técnico em tecnologia, fomos desafiados a criar uma solução que
                    contribuísse para os Objetivos de Desenvolvimento Sustentável da
                    Agenda 2030 (ODS) e, ao olhar para nossa realidade, percebemos que a
                    verdadeira mudança começa quando todos se sentem parte dela.
                    <br /><br />
                    Entendemos que transformar a sociedade exige mais do que boas
                    intenções: é preciso agir na causa, estimular a participação e abrir
                    espaço para que cada cidadão tenha voz. Acreditamos que a força de uma
                    cidade está nas pessoas que a constroem todos os dias. Por isso,
                    unimos nossos conhecimentos técnicos às vivências e experiências de
                    cada integrante do grupo, somando esforços com parceiros que
                    compartilham do mesmo propósito.
                    <br /><br />
                    Criamos um projeto que utiliza a tecnologia como ferramenta de
                    cidadania ativa, buscando simplificar processos burocráticos e
                    fortalecer o vínculo entre a população e a Câmara Municipal de
                    Marília. Nosso propósito é inspirar a participação popular,
                    aproximando o mariliense das decisões que moldam sua cidade. Por meio
                    da nossa plataforma digital, oferecemos um canal direto de comunicação
                    com o poder público, onde as demandas da comunidade são registradas,
                    acompanhadas e transformadas em oportunidades reais de mudança.
                    <br /><br />
                    Mais do que uma ferramenta digital, o Todos Por Um é um movimento
                    coletivo por uma Marília mais participativa, conectada e consciente de
                    seu poder transformador.
                </p>
            </div>
            <div class="w-full flex justify-center">
                <img src="assets/img/pexels-joey-lu-49400-186537.jpg" alt="Avenida movimentada"
                    class="w-full h-auto object-cover rounded-lg shadow-md" />
            </div>

        </div>
    </div>
    <section class="text-center p-10">
        <h2 class="text-[#005B8C] text-center pb-10 mt-12 font-bold text-2xl">NOSSOS OBJETIVOS</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 max-w-4xl mx-auto justify-items-center">

            <div
                class="cards p-5 bg-white shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg border border-gray-100 hover:-translate-y-2">
                <h3 class="titulocard font-bold text-[#005B8C] mb-2">Estimular</h3>
                <p>a participação política ativa dos moradores</p>
            </div>

            <div
                class="cards p-5 bg-white shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg border border-gray-100 hover:-translate-y-2">
                <h3 class="titulocard font-bold text-[#005B8C] mb-2">Aproximar</h3>
                <p>a população das decisões da câmara e da prefeitura</p>
            </div>

            <div
                class="cards p-5 bg-white shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg border border-gray-100 hover:-translate-y-2">
                <h3 class="titulocard font-bold text-[#005B8C] mb-2">Promover</h3>
                <p>a fiscalização dos representantes públicos</p>
            </div>

            <div
                class="cards p-5 bg-white shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg border border-gray-100 hover:-translate-y-2">
                <h3 class="titulocard font-bold text-[#005B8C] mb-2">Criar</h3>
                <p>um espaço seguro para o debate e a troca de ideias</p>
            </div>

            <div
                class="cards p-5 bg-white shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg border border-gray-100 hover:-translate-y-2">
                <h3 class="titulocard font-bold text-[#005B8C] mb-2">Democratizar</h3>
                <p>o conhecimento político de forma acessível e leve</p>
            </div>

            <div
                class="cards p-5 bg-white shadow-[0px_0px_6px_rgba(0,0,0,0.5)] rounded-lg border border-gray-100 hover:-translate-y-2">
                <h3 class="titulocard font-bold text-[#005B8C] mb-2">Fortalecer</h3>
                <p>o sentimento de comunidade e pertencimento</p>
            </div>

        </div>
    </section>
@endsection
