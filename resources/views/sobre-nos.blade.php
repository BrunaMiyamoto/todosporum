@extends('layouts.site')

@section('conteudo')
    <div class="max-w-screen-md text-justify pt-10 pr-5 grid grid-cols-1 sm:grid-cols-[auto_1fr]">
        <div class="sm:flex gap-6 ">
            <div class=" text-justify sm:gap-3">
                <h1 class="text-[#05668d] text-start pb-10 mt-24 font-bold  text-3xl">SOBRE O PROJETO</h1>
                <p>
                    O Todos Por Um nasceu como uma iniciativa de estudantes de um curso
                    técnico em tecnologia, fomos desafiados a criar uma solução que
                    contribuísse para os Objetivos de Desenvolvimento Sustentável da
                    Agenda 2030 (ODS) e, ao olhar para nossa realidade, percebemos que a
                    verdadeira mudança começa quando todos se sentem parte dela.
                    <br />
                    <br />
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
            <div class="grid grid-cols-1 sm:grid-cols-[auto_1fr]">
                <img src="assets/img/pexels-joey-lu-49400-186537.jpg" alt="Avenida movimentada" />
            </div>
        </div>
    </div>

    <section class="text-center p-10">
        <h2 class="text-[#05668d] text-center pb-10 mt-24 font-bold  text-2xl">NOSSOS OBJETIVOS</h2>

        <div class=" grid grid-cols-3 gap-7 max-w-4xl m-0 mx-auto text-center">

            <div class="cards">
                <h3 class="titulocard">Estimular</h3>
                <p>a participação política ativa dos moradores</p>
            </div>

            <div class="cards">
                <h3 class="titulocard">Aproximar</h3>
                <p>a população das decisões da câmara e da prefeitura</p>
            </div>

            <div class="cards">
                <h3 class="titulocard">Promover</h3>
                <p>a fiscalização dos representantes públicos</p>
            </div>

            <div class="cards">
                <h3 class="titulocard">Criar</h3>
                <p>um espaço seguro para o debate e a troca de ideias</p>
            </div>

            <div class="cards">
                <h3 class="titulocard">Democratizar</h3>
                <p>o conhecimento político de forma acessível e leve</p>
            </div>

            <div class="cards">
                <h3 class="titulocard">Fortalecer</h3>
                <p>o sentimento de comunidade e pertencimento</p>
            </div>
        </div>
    </section>
@endsection
