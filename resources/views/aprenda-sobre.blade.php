@extends('layouts.site')

@section('conteudo')
    <div id="banner"
        class="min-w-screen bg-[#05668D] text-center p-24 bg-cover shadow-[0px_0px_10px_rgba(0, 0, 0, 0.2)] text-white">
        <h1 class="py-3 px-5 font-bold text-3xl">APRENDA SOBRE</h1>
        <p class="max-w-900 text-xs font-normal">
            Compreenda o cenário político de forma clara e acessível. Explore a
            página e tenha acesso a vídeos e artigos que auxiliam na sua
            compreensão e posicionamento diante do contexto atual.
        </p>
    </div>
    <div id="artigovideo" class="max-w-3xl mx-auto">
        <ul id="menu2" class="flex justify-center pt-7 pb-2 gap-7">
            <li>
                <a href="{{ route('aprendaSobre') }}" class="text-orange-500 font-bold text-sl hover:text-sky-700">Artigos</a>
            </li>
            <li>
                <a href="{{ route('aprendaVideos') }}"
                    class="text-orange-500 font-bold text-sl hover:text-sky-700">Videos</a>

            </li>
        </ul>
    </div>
    <div class="font-sans px-5 ">
        <div class="titulosecao">
            <h2 class="text-start text-[#05668D] py-7 font-bold  text-xl max-w-7xl mx-auto">DESTAQUES</h2>
        </div>

        <div class="max-w-7xl grid grid-cols-1  sm:grid-cols-[1fr_1fr] gap-8 mx-auto">
            <!-- DESTAQUES ESQUERDA DESTAQUES ESQUERDA!!!!!!!!!!! -->

            <div>
                <img src={{ asset('assets/img/photo-1541872703-74c5e44368f9.avif') }}
                    class="object-cover w-[650px] h-[300] flex-shrink-0" alt="Imagem de Barack Obama em ligação" />
                <h3 class="font-bold py-4 text-sm">{{ $aprendaSobre[0]->titulo }}</h3>
                <div class="text-justify text-xs">
                    {{ $aprendaSobre[0]->resumo }}
                </div>
                <div class="py-6 ">
                    <a href="{{ route('paginaArtigo') }}" class="bg-[#629643] text-white rounded-md px-2 py-1 text-xs">Leia
                        Completo</a>
                </div>
            </div>


            <!-- DESTAQUES DIREITA DESTAQUES DIREITA!!!!!!!!!!! -->
            <div class="overflow-hidden items-center ">
                <div class="flex gap-4  items-center">
                    <img src={{ asset('assets/img/photo-1529107386315-e1a2ed48a620.avif') }}
                        class="object-cover w-44 h-40 flex-shrink-0" alt="Imagem de uma assembléia legislativa" />
                    <div>
                        <h3 class="font-bold py-4 text-sm">{{ $aprendaSobre[1]->titulo }}</h3>
                        <div class="text-justify text-xs">
                            {{ $aprendaSobre[1]->resumo }}
                        </div>
                        <div class="py-6 ">
                            <a href="{{ route('paginaArtigo2') }}"
                                class="bg-[#629643] text-white rounded-md px-2 py-1 text-xs">Leia
                                Completo</a>
                        </div>
                    </div>
                </div>

                <div class="flex gap-4 items-center">
                    <img src={{ asset('assets/img/photo-1577495508048-b635879837f1.avif') }}
                        class="object-cover w-44 h-40 flex-shrink-0" alt="Imagem de caminho na floresta" />
                    <div>
                        <h3 class="font-bold py-4 text-sm">{{ $aprendaSobre[2]->titulo }}</h3>
                        <div class="text-justify text-xs">
                            {{ $aprendaSobre[2]->resumo }}
                        </div>
                        <div class="py-6 ">
                            <a href="{{ route('paginaArtigo3') }}"
                                class="bg-[#629643] text-white rounded-md px-2 py-1 text-xs">Leia
                                Completo</a>
                        </div>
                    </div>
                </div>

                <div class="flex gap-4  items-center">
                    <img src={{ asset('assets/img/photo-1573164713714-d95e436ab8d6.avif') }}
                        class="object-cover w-44 h-40 flex-shrink-0" alt="Imagem de mulher digitando no computador" />
                    <div>
                        <h3 class="font-bold py-4 text-sm">{{ $aprendaSobre[3]->titulo }}</h3>
                        <div class="text-justify text-xs">
                            {{ $aprendaSobre[3]->resumo }}
                        </div>
                        <div class="py-6 ">
                            <a href="{{ route('paginaArtigo4') }}"
                                class="bg-[#629643] text-white rounded-md px-2 py-1 text-xs">Leia
                                Completo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ARTIGOS ARTIGOS ARTIGOS ARTIGOS -->
        <div class="border-t-2 border-[#05668D] py-5 max-w-7xl mx-auto">
            <h2 class="text-start text-[#05668D] py-4 font-bold text-xl">ARTIGOS</h2>
        </div>

        <div class="max-w-7xl grid grid-cols-1 pb-5 sm:grid-cols-[1fr_1fr] gap-8 mx-auto">
            <div class="">
                <div class="artigos">
                    <h3 class="font-bold py-4 text-sm">{{ $aprendaSobre[0]->titulo }}</h3>
                    <div class="text-justify text-xs">
                        {{ $aprendaSobre[0]->conteudo }}
                    </div>
                    <div class="py-6 ">
                        <a href="{{ route('paginaArtigo') }}"class="bg-[#629643] text-white rounded-md px-2 py-1 text-xs">Saiba
                            Mais</a>
                    </div>
                </div>

                <div class="artigos">
                    <h3 class="font-bold py-4 text-sm">{{ $aprendaSobre[1]->titulo }}</h3>
                    <div class="text-justify text-xs">
                        {{ $aprendaSobre[1]->conteudo }}
                    </div>
                    <div class="py-6 ">
                        <a href="{{ route('paginaArtigo2') }}"class="bg-[#629643] text-white rounded-md px-2 py-1
                            text-xs">Saiba
                            Mais</a>
                    </div>

                </div>

                <div class="artigos">
                    <h3 class="font-bold py-4 text-sm">{{ $aprendaSobre[2]->titulo }}</h3>
                    <div class="text-justify text-xs">
                        {{ $aprendaSobre[2]->conteudo }}
                    </div>
                    <div class="py-6 ">
                        <a href="{{ route('paginaArtigo3') }}"class="bg-[#629643] text-white rounded-md px-2 py-1 text-xs">Saiba
                            Mais</a>
                    </div>
                </div>
            </div>

            <!-- ARTIGOS DIREITA DIREITA DIRTETIA  -->
            <div class="artigosedireita">
                <div class="artigos">
                    <h3 class="font-bold py-4 text-sm">{{ $aprendaSobre[3]->titulo }}</h3>
                    <div class="text-justify text-xs">
                        {{ $aprendaSobre[3]->conteudo }}
                    </div>
                    <div class="py-6 ">
                        <a href="{{ route('paginaArtigo4') }}"class="bg-[#629643] text-white rounded-md px-2 py-1 text-xs">Saiba
                            Mais</a>
                    </div>
                </div>

                <div class="artigos">
                    <h3 class="font-bold py-4 text-sm">{{ $aprendaSobre[4]->titulo }}</h3>
                    <div class="text-justify text-xs">
                        {{ $aprendaSobre[4]->conteudo }}
                    </div>
                    <div class="py-6 ">
                        <a href="{{ route('paginaArtigo5') }}"class="bg-[#629643] text-white rounded-md px-2 py-1 text-xs">Saiba
                            Mais</a>
                    </div>
                </div>

                <div class="artigos">
                    <h3 class="font-bold py-4 text-sm">{{ $aprendaSobre[5]->titulo }}</h3>
                    <div class="text-justify text-xs">
                        {{ $aprendaSobre[5]->conteudo }}
                    </div>
                    <div class="py-6 ">
                        <a href="{{ route('paginaArtigo6') }}"class="bg-[#629643] text-white rounded-md px-2 py-1 text-xs">Saiba
                            Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
