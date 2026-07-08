@extends('layouts.site')

@section('conteudo')
    <div class="relative bg-cover bg-no-repeat bg-center max-h-[900px] min-h-80 "
        style="background-image: url('{{ asset('assets/img/pexels-cytonn-955389.jpg') }}')">
        <div class="absolute inset-0 bg-gradient-to-r from-sky-900 to-slate-500 mix-blend-multiply"></div>

        <div class="relative z-10 flex flex-col justify-center items-center py-12">
            <h1 class="text-white font-semibold text-center text-3xl  ">ENVIE SUA IDEIA JÁ</h1>
            <p class="text-white text-center p-6 ">
                Participe ativamente do debate público: envie projetos, proponha
                pautas, registre reclamações e interaja com outros cidadãos. <br />
                Vote nas melhores iniciativas e ajude a transformar sua comunidade.
                Exerça seu papel de cidadão e faça a diferença!
            </p>
            <a href="{{ route('admin.postagem.cadastrar') }}"
                class="text-[#e9702a] block text-center w-full max-w-3xl bg-white p-2 rounded-xl">Escreva
                aqui...</a>
            <br />
            <a href="{{ route('forumProjetos') }}" class="block text-center text-[#99cef3] ">Explore o Fórum</a>
        </div>
    </div>

    <h2 class="text-[#05668d] text-center mt-20 font-bold text-3xl ">DESTAQUES DA COMUNIDADE</h2>

    <div class=" flex min-h-screen w-full items-center justify-center">
        <div class="flex flex-col ">

            <section class="destaque ">
                <div class="cabeca">
                    <div class="tagsDestaque">
                        <ul class="destaqueUl">
                            <li class="destaqueLi">Ensino</li>
                        </ul>
                    </div>
                    <div class="usuarioDestaque">Projeto por: Usuário00002</div>
                </div>
                <h3 class="linhalaranja">
                    Projeto “Educação Política nas Escolas” - Formação de Jovens Cidadãos
                </h3>
                <p>
                    <strong>Objetivo:</strong> Implementar oficinas e palestras sobre
                    cidadania, política, direitos e deveres nas escolas públicas de
                    Marília, promovendo o engajamento político desde a juventude.
                </p>
            </section>


            <section class="destaque">
                <div class="cabeca">
                    <div class="tagsDestaque">
                        <ul class="destaqueUl">
                            <li class="destaqueLi">Infraestrutura</li>
                            <li class="destaqueLi">Natureza</li>
                        </ul>
                    </div>
                    <div class="usuarioDestaque">Projeto por: Usuário00003</div>
                </div>
                <h3 class="linhalaranja">Projeto “Praça Viva” - Revitalização de Espaços Públicos</h3>
                <p>
                    <strong>Objetivo:</strong> Transformar praças abandonadas ou pouco
                    utilizadas em espaços comunitários ativos, com infraestrutura básica
                    (bancos, iluminação, lixeiras), área verde, brinquedos para crianças e
                    espaços para atividades culturais e esportivas.
                </p>
            </section>
            <section class="destaque">
                <div class="cabeca">
                    <div class="tagsDestaque">
                        <ul class="destaqueUl">
                            <li class="destaqueLi">Comunicação</li>
                            <li class="destaqueLi">Tecnologia</li>
                        </ul>
                    </div>
                    <div class="usuarioDestaque">Projeto por: Todos por Um</div>
                </div>
                <h3 class="linhalaranja">
                    Projeto “Ouvidoria Cidadã Digital” - Plataforma de Escuta Popular
                </h3>
                <p>
                    <strong>Objetivo:</strong> Criar um canal digital oficial de escuta
                    permanente da população, onde qualquer cidadão possa registrar
                    sugestões, reclamações ou ideias diretamente vinculadas às secretarias
                    municipais e vereadores.
                </p>
            </section>
        </div>
    </div>

    <section class="entendarapido">
        <h2 class="text-[#05668d] text-center mb-8 font-bold text-3xl ">ENTENDA RÁPIDO</h2>
        <div class="text-center  ">
            <video class="video" poster="assets/img/capa2.png" controls>
                <source src="assets/img/gato-teste.mp4" type="video/mp4" />
            </video>
            <video class="video" poster="assets/img/capa2.png" controls>
                <source src="assets/img/gato-teste.mp4" type="video/mp4" />
            </video>
            <video class="video" poster="assets/img/capa2.png" controls>
                <source src="assets/img/gato-teste.mp4" type="video/mp4" />
            </video>
        </div>

        <a href="aprenda-videos.html"
            class="bg-[#629643] text-white py-1 px-2 rounded-md block text-center   m-auto w-64">Veja
            mais vídeos explicativos</a>
    </section>

    <section class="grid grid-cols-1 sm:grid-cols-[auto_1fr] gap-5 py-14 px-5 max-w-7xl mx-auto mt-7">
        <div class="sm:flex gap-6 ">
            <div class=" text-justify sm:gap-3">
                <h2 class="text-[#05668d] mb-2 font-bold text-3xl ">CONHEÇA MAIS SOBRE NÓS</h2>
                <p class="paragrafo">
                    O projeto “Todos Por Um” consiste em uma plataforma digital
                    independente e sem fins lucrativos, destinada à população de
                    Marília. Por meio do nosso website, os cidadãos poderão propor
                    ideias, levantar questões sociais e apresentar projetos com
                    potencial de impacto positivo na comunidade. O objetivo central é
                    encaminhar essas propostas à Câmara Municipal para apreciação e
                    eventual votação.
                </p>
                <p class="paragrafo">
                    Nossa iniciativa busca combater a baixa participação política da
                    população, promovendo maior engajamento cívico e fortalecendo o
                    vínculo entre os moradores e as decisões tomadas no âmbito
                    legislativo municipal. Além disso, almejamos democratizar o acesso
                    ao conhecimento político, estimular o debate público e contribuir
                    para o desenvolvimento coletivo da cidade.
                </p>
                <p class="paragrafo">
                    Por meio do “Todos Por Um”, acreditamos que é possível construir uma
                    Marília mais participativa, transparente e inclusiva.
                </p>
                <a href="sobre-nos.html" class="sobrenosbotao">Saiba mais sobre</a>
                <a href="contato.html" class="sobrenosbotao">Entre em contato conosco</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-[auto_1fr]">
                <img src="{{ asset('assets/img/pexels-polina-tankilevitch-8203158-scaled.jpg') }}"
                    alt="Mulher gritando em um megafone" class="rounded-2xl" />
            </div>
        </div>
    </section>
@endsection
