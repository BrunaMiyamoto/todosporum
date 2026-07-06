@extends('layouts.site')

@section('conteudo')
    <div id="banner">
        <h1 id="tituloBanner">ENVIE SUA IDEIA JÁ</h1>
        <p id="textoBanner">
            Participe ativamente do debate público: envie projetos, proponha
            pautas, registre reclamações e interaja com outros cidadãos. <br />
            Vote nas melhores iniciativas e ajude a transformar sua comunidade.
            Exerça seu papel de cidadão e faça a diferença!
        </p>
        <a href="login.html" id="botaoEscreva">Escreva aqui...</a>
        <br />
        <a href="forum-projetos.html" id="botaoExplore">Explore o Fórum</a>
    </div>

    <h2 class="text-[#05668d] text-center mt-20 mb-8 font-bold text-3xl ">DESTAQUES DA COMUNIDADE</h2>

    <div class=" flex-1">

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

    <section class="entendarapido">
        <h2>ENTENDA RÁPIDO</h2>
        <div id="videocentro">
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
        <br />
        <a href="aprenda-videos.html" id="entendabotao">Veja mais vídeos explicativos</a>
    </section>

    <section class="sobrenos">
        <div id="textosobrenos">
            <h2>CONHEÇA MAIS SOBRE NÓS</h2>
            <p>
                O projeto “Todos Por Um” consiste em uma plataforma digital
                independente e sem fins lucrativos, destinada à população de
                Marília. Por meio do nosso website, os cidadãos poderão propor
                ideias, levantar questões sociais e apresentar projetos com
                potencial de impacto positivo na comunidade. O objetivo central é
                encaminhar essas propostas à Câmara Municipal para apreciação e
                eventual votação.
            </p>
            <p>
                Nossa iniciativa busca combater a baixa participação política da
                população, promovendo maior engajamento cívico e fortalecendo o
                vínculo entre os moradores e as decisões tomadas no âmbito
                legislativo municipal. Além disso, almejamos democratizar o acesso
                ao conhecimento político, estimular o debate público e contribuir
                para o desenvolvimento coletivo da cidade.
            </p>
            <p>
                Por meio do “Todos Por Um”, acreditamos que é possível construir uma
                Marília mais participativa, transparente e inclusiva.
            </p>
            <a href="sobre-nos.html" class="sobrenosbotao">Saiba mais sobre Todos Por Um</a>
            <a href="contato.html" class="sobrenosbotao">Entre em contato conosco</a>
        </div>
        <div id="imagemsobrenos">
            <img src="assets/img/pexels-polina-tankilevitch-8203158-scaled.jpg" alt="Mulher gritando em um megafone"
                width="600" height="400" />
        </div>
    </section>
@endsection
