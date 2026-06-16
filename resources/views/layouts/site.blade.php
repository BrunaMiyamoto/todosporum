<!doctype html>
<html lang="pt-br">

<head>
    <title>@yield('titulo', 'Todos Por Um')</title>
    <meta charset="UTF-8" />
    <meta name="kaywords" content="política, Marília, ideias, comunidade, união" />
    <meta name="description"
        content="O projeto “Todos Por Um” consiste em um website no qual a população de Marília poderá acessar e contribuir com ideias, questões sociais ou projetos, propriamente ditos, cujo objetivo principal será o de levá-los até a Câmara Municipal para serem votados." />
    <meta name="author" content="Beatriz Ronchi" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite('resources/css/app.css')
</head>

<body class="">
    <header>
        <img src="assets/img/logo.png" alt="Logo do projeto" width="100" height="60" />
        <div class="menu-container">
            <nav class="menu" id="menu">
                <a href="javascript:;" id="fechar-menu">
                    <i class="fa-solid fa-xmark"></i>
                </a>
                <ul id="menu">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="forum-projetos.html">Fórum</a></li>
                    <li><a href="sobre-nos.html">Sobre Nós</a></li>
                    <li><a href="aprendasobre.html">Aprenda Sobre</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
                <a href="login.html" class="btn-login"><i
                        class="fa-solid fa-right-from-bracket"></i>Login/Registre-se</a>
            </nav>
        </div>
        <div class="btn-desk">
            <a href="login.html" class="btn-login"><i class="fa-solid fa-right-from-bracket"></i>Login/Registre-se</a>
        </div>
        <button class="hamburguer" id="btn-menu">
            <i class="fa-solid fa-bars"></i>
        </button>
    </header>

    <main>

        @yield('conteudo')
    </main>


    <footer>
        <div class="rodape">
            <div id="logorodape">
                <img id="logorodape" src="assets/img/logo branco.png" alt="Logo Todos por Um" width="170"
                    height="90" />
            </div>
            <div id="responsivoRodape">
                <ul>
                    <li class="rodapetitulo">Fórum</li>
                    <li>
                        <a href="forum-projetos.html">Posts em destaque</a>
                    </li>
                </ul>

                <ul>
                    <li class="rodapetitulo">Sua área</li>
                    <li>
                        <a href="sua-conta.html">Sua conta</a>
                    </li>
                    <li>
                        <a href="suas-postagens.html">Suas postagens</a>
                    </li>
                    <li>
                        <a href="seguranca-privacidade.html">Segurança e privacidade</a>
                    </li>
                    <li>
                        <a href="acessibilidade.html">Acessibilidade</a>
                    </li>
                </ul>

                <ul>
                    <li class="rodapetitulo">Sobre nós</li>
                    <li>
                        <a href="sobre-nos.html">Sobre o projeto</a>
                    </li>
                    <li>
                        <a href="sobre-nos.html">Nossos objetivos</a>
                    </li>
                </ul>

                <ul>
                    <li class="rodapetitulo">Contato</li>
                    <li>
                        <a href="contato.html">Entre em contato</a>
                    </li>
                </ul>

                <ul>
                    <li class="rodapetitulo">Aprenda Sobre</li>
                    <li>
                        <a href="aprenda-videos.html">Vídeos</a>
                    </li>
                    <li>
                        <a href="aprendasobre.html">Artigos</a>
                    </li>
                </ul>

                <ul>
                    <li class="rodapetitulo">Nossas políticas</li>
                    <li>
                        <a href="politica-privacidade.html">Políticas de privacidade</a>
                    </li>
                    <li>
                        <a href="cookies.html">Políticas de cookies</a>
                    </li>
                    <li>
                        <a href="termos-uso.html">Termos de Uso</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr id="linharodape" />
        <div class="rodapebaixo">
            <p>Todos os direitos reservados</p>
            <div>
                <img src="assets/img/youtube-circle.png" alt="Ícone Youtube" width="35" height="35" />
                <img src="assets/img/twitter-alt-circle.png" alt="Ícone Twitter" width="35" height="35" />
                <img src="assets/img/whatsapp-circle.png" alt="Ícone Whatsapp" width="35" height="35" />
                <img src="assets/img/facebook (1).png" alt="Ícone Facebook" width="35" height="35" />
                <img src="assets/img/instagram-circle.png" alt="Ícone Instagram" width="35" height="35" />
            </div>
        </div>
    </footer>

    <script src="js/forum-duvidas.js"></script>
</body>

</html>
