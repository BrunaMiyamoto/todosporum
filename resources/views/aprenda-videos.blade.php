@extends('layouts.site')

@section('conteudo')
    <div id="banner"
        class="bg-[#05668d] text-white text-center mx-auto shadow-[0px_0px_10px_rgba(0,0,0,0.2)] p-[90px] bg-cover">
        <h1 class="py-[20px] px-[10px] font-bold text-xl md:text-2xl">APRENDA SOBRE</h1>
        <p class="w-auto mx-auto max-w-[900px] text-center text-xs font-normal leading-relaxed">
            Compreenda o cenário político de forma clara e acessível. Explore a
            página e tenha acesso a vídeos e artigos que auxiliam na sua
            compreensão e posicionamento diante do contexto atual.
        </p>
    </div>

    <div id="artigovideo" class="max-w-[768px] mx-auto">
        <ul id="menu2" class="flex flex-wrap justify-center list-none text-center py-[20px] mx-auto w-auto gap-[40px]">
            <li>
                <a href="{{ route('aprendaSobre') }}"
                    class="text-[#e9702a] font-bold text-[16px] no-underline hover:text-[#05668d] transition-colors">Artigos</a>
            </li>
            <li>
                <a href="{{ route('aprendaVideos') }}"
                    class="text-[#e9702a] font-bold text-[16px] no-underline hover:text-[#05668d] transition-colors">Vídeos</a>
            </li>
        </ul>
    </div>

    <div class="titulosecao px-[20px] md:px-0">
        <h2 class="pt-[20px] mx-auto text-start text-[#05668d] text-[16px] max-w-[950px] font-bold">DESTAQUES</h2>
        <p class="pt-[10px] pb-[20px] my-[10px] mx-auto text-start text-[#333] text-[12px] max-w-[950px]">
            Vídeos curtos e objetivos, desenvolvidos para quem busca uma
            compreensão rápida e acessível sobre temas políticos.
        </p>
    </div>


    <div
        class="flex items-center justify-center w-full max-w-[1100px] mx-auto my-[10px] px-[10px] gap-[10px] md:gap-[20px]">



        <button
            class="bg-transparent text-[#05668d] hover:text-[#e9702a] border-none cursor-pointer text-[40px] md:text-[60px] transition-colors z-10"
            onclick="mudarvideo(-1)">&#10094;</button>




        <div class="carrossel w-[950px] max-w-[calc(100vw-120px)] overflow-hidden rounded-[10px]">
            <div id="faixa" class="flex flex-nowrap transition-transform duration-500 ease-in-out gap-[25px]">
                @foreach ($videos->take(6) as $video)
                    <div class="videoplay relative w-[340px] h-[500px] shrink-0">
                        <video class="video w-full h-full object-cover rounded-[8px]"
                            poster="{{ $video->imagem ? asset('storage/' . $video->imagem) : '' }}"
                            alt="{{ $video->titulo }}" controls>
                            <source src="{{ asset('storage/' . $video->videos) }}" type="video/mp4" />
                        </video>



                        <div class="play absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[60px] cursor-pointer z-10 transition-transform hover:scale-110"
                            onclick="tocarVideo(this)">
                            <img src="{{ asset('assets/img/play-button.png') }}" alt="botao de play" class="w-[60px]" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>




        <button
            class="bg-transparent text-[#05668d] hover:text-[#e9702a] border-none cursor-pointer text-[40px] md:text-[60px] transition-colors z-10"
            onclick="mudarvideo(1)">&#10095;</button>
    </div>




    <div class="titulosecao px-[20px] md:px-0">
        <h2 class="pt-[20px] mx-auto text-start text-[#05668d] text-[16px] max-w-[950px] font-bold">VÍDEOS</h2>
        <p class="pt-[10px] pb-[20px] my-[10px] mx-auto text-start text-[#333] text-[12px] max-w-[950px]">
            Nossos vídeos oferecem análises aprofundadas e explicações
            detalhadas sobre temas políticos de relevância nacional e
            internacional.
        </p>
    </div>

    <div class="videoscoluna mx-auto my-[10px] flex flex-col md:flex-row gap-[20px] w-[950px] max-w-full px-[20px] md:px-0">
        <div class="colunaesquerda flex-1 flex flex-col gap-[10px]">
            @foreach ($videos->slice(0, ceil($videos->count() / 2)) as $video)
                <div class="videosesquerda relative w-full md:w-[490px] h-[340px]">
                    <video class="video w-[450px] max-w-full h-[277px] object-cover rounded-[15px]"
                        poster="{{ $video->imagem ? asset('storage/' . $video->imagem) : '' }}" alt="{{ $video->titulo }}"
                        controls>
                        <source src="{{ asset('storage/' . $video->videos) }}" type="video/mp4" />
                    </video>
                    <h3 class="text-[#404040] text-[16px] font-bold text-start my-[10px] mx-auto">{{ $video->titulo }}</h3>



                    <div class="play2 absolute top-[138px] left-1/2 -translate-x-1/2 -translate-y-1/2 text-[60px] cursor-pointer z-10 transition-transform hover:scale-110"
                        onclick="tocarVideo(this)">
                        <img src="{{ asset('assets/img/play-button.png') }}" alt="botao de play" class="w-[60px]" />
                    </div>
                </div>
            @endforeach
        </div>

        <div class="colunadireita flex-1 flex flex-col gap-[10px]">
            @foreach ($videos->slice(ceil($videos->count() / 2)) as $video)
                <div class="videosdireita relative w-full md:w-[490px] h-[340px]">
                    <video class="video w-[450px] max-w-full h-[277px] object-cover rounded-[15px]"
                        poster="{{ $video->imagem ? asset('storage/' . $video->imagem) : '' }}" alt="{{ $video->titulo }}"
                        controls>
                        <source src="{{ asset('storage/' . $video->videos) }}" type="video/mp4" />
                    </video>
                    <h3 class="text-[#404040] text-[16px] font-bold text-start my-[10px] mx-auto">{{ $video->titulo }}</h3>


                    <div class="play2 absolute top-[138px] left-1/2 -translate-x-1/2 -translate-y-1/2 text-[60px] cursor-pointer z-10 transition-transform hover:scale-110"
                        onclick="tocarVideo(this)">
                        <img src="{{ asset('assets/img/play-button.png') }}" alt="botao de play" class="w-[60px]" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        let indiceAtual = 0;

        function mudarvideo(direcao) {
            const faixa = document.getElementById('faixa');
            const totalVideos = faixa.children.length;

            indiceAtual += direcao;


            let maxIndice = totalVideos - 3;


            if (window.innerWidth < 768) {
                maxIndice = totalVideos - 1;
            }

            if (indiceAtual > maxIndice) indiceAtual = maxIndice;
            if (indiceAtual < 0) indiceAtual = 0;


            const larguraItem = 365;
            faixa.style.transform = `translateX(-${indiceAtual * larguraItem}px)`;
        }


        function tocarVideo(botao) {

            const container = botao.parentElement;
            const video = container.querySelector('video');

            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }


        document.querySelectorAll('video').forEach(video => {
            video.addEventListener('play', function() {
                const btnPlay = this.parentElement.querySelector('.play, .play2');
                if (btnPlay) btnPlay.style.display = 'none';
            });

            video.addEventListener('pause', function() {
                const btnPlay = this.parentElement.querySelector('.play, .play2');
                if (btnPlay) btnPlay.style.display = 'block';
            });
        });
    </script>
@endsection
