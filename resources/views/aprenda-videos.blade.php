@extends('layouts.site')

@section('conteudo')
    <div id="banner">
        <h1>APRENDA SOBRE</h1>
        <p>
            Compreenda o cenário político de forma clara e acessível. Explore a
            página e tenha acesso a vídeos e artigos que auxiliam na sua
            compreensão e posicionamento diante do contexto atual.
        </p>
    </div>
    <div id="artigovideo">
        <ul id="menu2">
            <li>
                <a href="aprendasobre.html">Artigos</a>
            </li>
            <li>
                <a href="aprenda-videos.html">Videos</a>
            </li>
        </ul>
    </div>
    <div class="todoconteudo">
        <div class="titulosecao">
            <h2>DESTAQUES</h2>
            <p>
                Vídeos curtos e objetivos, desenvolvidos para quem busca uma
                compreensão rápida e acessível sobre temas políticos.
            </p>
        </div>
        <!-- CARROSSEL DE VIDEOS CARROSSEL DE VIDEOS -->
        <div class="carrossel">
            <div id="faixa">
                <div class="videoplay">
                    <video class="video" poster="img/pexels-pixabay-269077.jpg" alt="Imagem de fachada de prédio" controls>
                        <source src="img/6918112_Motion_Graphics_Motion_Graphic_1080x1920.mp4" type="video/mp4" />
                    </video>
                    <div class="play">
                        <img src="img/play-button.png" alt="botao de play" />
                    </div>
                </div>
                <div class="videoplay">
                    <video class="video" poster="img/pexels-pixabay-269077.jpg" alt="Imagem de fachada de prédio" controls>
                        <source src="#" type="video/mp4" />
                    </video>
                    <div class="play">
                        <img src="img/play-button.png" alt="botao de play" />
                    </div>
                </div>
                <div class="videoplay">
                    <video class="video" poster="img/pexels-pixabay-269077.jpg" alt="Imagem de fachada de prédio" controls>
                        <source src="#" type="video/mp4" />
                    </video>
                    <div class="play">
                        <img src="img/play-button.png" alt="botao de play" />
                    </div>
                </div>
                <div class="videoplay">
                    <video class="video" poster="img/pexels-pixabay-269077.jpg" alt="Imagem de fachada de prédio" controls>
                        <source src="#" type="video/mp4" />
                    </video>
                    <div class="play">
                        <img src="img/play-button.png" alt="botao de play" />
                    </div>
                </div>
                <div class="videoplay">
                    <video class="video" poster="img/pexels-pixabay-269077.jpg" alt="Imagem de fachada de prédio" controls>
                        <source src="#" type="video/mp4" />
                    </video>
                    <div class="play">
                        <img src="img/play-button.png" alt="botao de play" />
                    </div>
                </div>
                <div class="videoplay">
                    <video class="video" poster="img/pexels-pixabay-269077.jpg" alt="Imagem de fachada de prédio" controls>
                        <source src="#" type="video/mp4" />
                    </video>
                    <div class="play">
                        <img src="img/play-button.png" alt="botao de play" />
                    </div>
                </div>
            </div>

            <button class="botaocarrossel anterior" onclick="mudarvideo(-3)">
                &#10094;
            </button>
            <button class="botaocarrossel proximo" onclick="mudarvideo(3)">
                &#10095;
            </button>
        </div>
        <!-- COLUNA VIDEO COLUNA VIDEOS COLUNA VIDEO -->
        <div class="titulosecao">
            <h2>VÍDEOS</h2>
            <p>
                Nossos vídeos oferecem análises aprofundadas e explicações
                detalhadas sobre temas políticos de relevância nacional e
                internacional. Com uma abordagem clara e fundamentada, o conteúdo
                busca ampliar a compreensão do público, explorando contextos
                históricos, conceitos teóricos e implicações práticas que auxiliam
                na formação de uma visão crítica e informada sobre o cenário
                político contemporâneo.
            </p>
        </div>

        <div class="videoscoluna">
            <div class="colunaesquerda">
                <div class="videosesquerda">
                    <video class="video" poster="img/pexels-kelly-2928232.jpg" alt="Imagem de uma pilha de papeis"
                        controls>
                        <source src="img/6918112_Motion_Graphics_Motion_Graphic_1080x1920.mp4" type="video/mp4" />
                    </video>
                    <h3>video 1 video 1 video 1</h3>
                    <div class="play2">
                        <img src="img/play-button.png" alt="botao de play" />
                    </div>
                </div>

                <div class="videosesquerda">
                    <video class="video" poster="img/pexels-kelly-2928232.jpg" alt="Imagem de uma pilha de papeis"
                        controls>
                        <source src="#" type="video/mp4" />
                    </video>
                    <h3>video 2 video 2 video 2</h3>
                    <div class="play2">
                        <img src="img/play-button.png" />
                    </div>
                </div>

                <div class="videosesquerda">
                    <video class="video" poster="img/pexels-kelly-2928232.jpg" alt="Imagem de uma pilha de papeis"
                        controls>
                        <source src="#" type="video/mp4" />
                    </video>
                    <h3>video 2 video 2 video 2</h3>
                    <div class="play2">
                        <img src="img/play-button.png" />
                    </div>
                </div>
            </div>

            <!-- AVIDEO DIREITA VIDEO DIREITA  -->
            <div class="colunadireita">
                <div class="videosdireita">
                    <video class="video" poster="img/pexels-kelly-2928232.jpg" alt="Imagem de uma pilha de papeis"
                        controls>
                        <source src="#" type="video/mp4" />
                    </video>
                    <h3>video 4 video 4 video 4</h3>
                    <div class="play2">
                        <img src="img/play-button.png" alt="botao de play" />
                    </div>
                </div>

                <div class="videosdireita">
                    <video class="video" poster="img/pexels-kelly-2928232.jpg" alt="Imagem de uma pilha de papeis"
                        controls>
                        <source src="#" type="video/mp4" />
                    </video>
                    <h3>video 4 video 4 video 4</h3>
                    <div class="play2">
                        <img src="img/play-button.png" alt="botao de play" />
                    </div>
                </div>

                <div class="videosdireita">
                    <video class="video" poster="img/pexels-kelly-2928232.jpg" alt="Imagem de uma pilha de papeis"
                        controls>
                        <source src="#" type="video/mp4" />
                    </video>
                    <h3>video 4 video 4 video 4</h3>
                    <div class="play2">
                        <img src="img/play-button.png" alt="botao de play" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
