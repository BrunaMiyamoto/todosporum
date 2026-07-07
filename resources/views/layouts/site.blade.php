<!doctype html>
<html lang="pt-br">

<head>
    <title>@yield('titulo', 'Todos Por Um')</title>
    <meta charset="UTF-8" />
    <meta name="kaywords" content="política, Marília, ideias, comunidade, união" />
    <meta name="description"
        content="O projeto “Todos Por Um” consiste em um website no qual a população de Marília poderá acessar e contribuir com ideias, questões sociais ou projetos, propriamente ditos, cujo objetivo principal será o de levá-los até a Câmara Municipal para serem votados." />
    <meta name="author" content="Beatriz Ronchi, Bruna Miyamoto, Fernanda Oliveira e Taís Ferreira" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"> --}}
    {{-- <link href="https://fonts.googlepis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script> --}}

    @vite(['resources/css/app.css'])
</head>

<body class="bg-[#ebf2fa] text-neutral-800">
    <header class="shadow-[0px_0px_6px_rgba(0,0,0,0.5)]">
        <div class="max-w-7xl mx-auto flex justify-between p-2 items-center ">
            <div class="font-bold text-xl"> <img class="max-w-14" src="{{ asset('assets/img/fundo transparente.png') }}"
                    alt="Logo do projeto" width="100" height="60" /></div>

            <div class="flex justify-end py-4 px-50 in-w-screen items-center max-w-7xl">
                <nav class="menu" id="menu" class="hover:text-blue-700 justify-end">
                    <a href="javascript:;" id="fechar-menu" class="hidden">
                        <i class="fa-solid fa-xmark "></i>
                    </a>
                    <ul id="menu" class="flex gap-10">
                        <li><a href="{{ route('home') }} "
                                class="text-orange-500 font-bold text-xs hover:text-bg-sky-700 py-2 ">Inicio</a>
                        </li>
                        <li><a
                                href="{{ route('forumProjetos') }}"class="text-orange-500 font-bold text-xs hover:text-bg-sky-700 py-2">Fórum</a>
                        </li>
                        <li><a
                                href="{{ route('sobreNos') }}"class="text-orange-500 font-bold text-xs hover:text-bg-sky-700 py-2">Sobre
                                Nós</a></li>
                        <li><a
                                href="{{ route('aprendaSobre') }}"class="text-orange-500 font-bold text-xs hover:text-bg-sky-700 py-2">Aprenda
                                Sobre</a></li>
                        <li><a
                                href="{{ route('contato') }}"class="text-orange-500 font-bold text-xs hover:text-bg-sky-700 py-2">Contato</a>
                        </li>
                    </ul>
                    <a href="{{ route('login') }}" class="btn-login"
                        class="bg-orange-500 text-blue-50 py-7 px-8 rounded-s text-xs font-bold hidden"><i
                            class="fa-solid fa-right-from-bracket"></i>Login/Registre-se</a>
                </nav>
            </div>
            <div class="btn-desk" class="hover:text-sky-700 bg-orange-500">
                <a href="{{ route('login') }}" class="btn-login"><i
                        class="fa-solid fa-right-from-bracket"></i>Login/Registre-se</a>
            </div>

            <button class="hamburguer" id="btn-menu" class="hidden">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </header>

    <main>
        @yield('conteudo')
    </main>


    <footer>
        <div class="rodape">
            <div id="logorodape">
                <img id="logorodape" src="{{ asset('assets/img/logo branco.png') }}" alt="Logo Todos por Um"
                    width="170" height="90" />
            </div>
            <div id="responsivoRodape">
                <ul>
                    <li class="rodapetitulo">Fórum</li>
                    <li>
                        <a href="{{ route('forumProjetos') }}">Posts em destaque</a>
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
                        <a href="{{ route('segurancaPrivacidade') }}">Segurança e privacidade</a>
                    </li>
                    <li>
                        <a href="acessibilidade.html">Acessibilidade</a>
                    </li>
                </ul>

                <ul>
                    <li class="rodapetitulo">Sobre nós</li>
                    <li>
                        <a href="{{ route('sobreNos') }}">Sobre o projeto</a>
                    </li>
                    <li>
                        <a href="{{ route('sobreNos') }}">Nossos objetivos</a>
                    </li>
                </ul>

                <ul>
                    <li class="rodapetitulo">Contato</li>
                    <li>
                        <a href="{{ route('contato') }}">Entre em contato</a>
                    </li>
                </ul>

                <ul>
                    <li class="rodapetitulo">Aprenda Sobre</li>
                    <li>
                        <a href="{{ route('aprendaVideos') }}">Vídeos</a>
                    </li>
                    <li>
                        <a href="{{ route('aprendaSobre') }}">Artigos</a>
                    </li>
                </ul>

                <ul>
                    <li class="rodapetitulo">Nossas políticas</li>
                    <li>
                        <a href="{{ route('politicaPrivacidade') }}">Políticas de privacidade</a>
                    </li>
                    <li>
                        <a href="{{ route('politicaCookies') }}">Políticas de cookies</a>
                    </li>
                    <li>
                        <a href="{{ route('termosUso') }}">Termos de Uso</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr id="linharodape" />
        <div class="rodapebaixo" class="flex">
            <p>Todos os direitos reservados</p>
            <div class="flex">
                <img src="{{ asset('assets/img/youtube-circle.png') }}" alt="Ícone Youtube" width="35"
                    height="35" />
                <img src="{{ asset('assets/img/twitter-alt-circle.png') }}" alt="Ícone Twitter" width="35"
                    height="35" />
                <img src="{{ asset('assets/img/whatsapp-circle.png') }}" alt="Ícone Whatsapp" width="35"
                    height="35" />
                <img src="{{ asset('assets/img/facebook (1).png') }}" alt="Ícone Facebook" width="35"
                    height="35" />
                <img src="{{ asset('assets/img/instagram-circle.png') }}" alt="Ícone Instagram" width="35"
                    height="35" />
            </div>
        </div>
    </footer>

    <script src="js/forum-duvidas.js"></script>
</body>

</html>
