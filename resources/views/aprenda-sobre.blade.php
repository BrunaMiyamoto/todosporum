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
                <a href="aprendasobre.html" class="text-orange-500 font-bold text-sl hover:text-sky-700">Artigos</a>
            </li>
            <li>
                <a href="aprenda-videos.html" class="text-orange-500 font-bold text-sl hover:text-sky-700">Videos</a>
            </li>
        </ul>
    </div>
    <div class="todoconteudo">
        <div class="titulosecao">
            <h2 class="text-start text-[#05668D] py-7">DESTAQUES</h2>
        </div>
        <div class="campos">
            <!-- DESTAQUES ESQUERDA DESTAQUES ESQUERDA!!!!!!!!!!! -->
            <div class="destaqueesquerda">
                <img src="assets/img/pexels-pixabay-269077.jpg" class="imagemgrande" alt="Imagem de fachada de prédio" />
                <h3>Destaque 1 Destaque 1 Destaque 1</h3>
                <div class="paragrafo1">
                    In nec erat vel tellus accumsan rhoncus non eu ipsum. Donec
                    tempus, quam vel aliquet vestibulum, erat augue cursus metus, et
                    venenatis nulla ante non est. Vestibulum nisl sapien, sollicitudin
                    in ultricies nec, luctus sit amet sapien. Fusce diam ex, viverra
                    sed tristique vitae, vestibulum eu eros.
                </div>
                <div class="botaoleiamais">
                    <a href="pagina-artigo.html" class="botaoleiacompleto">Leia Completo</a>
                </div>
            </div>

            <!-- DESTAQUES DIREITA DESTAQUES DIREITA!!!!!!!!!!! -->
            <div class="destaquesdireita">
                <div class="imagensdestaques">
                    <img src="img/pexels-pixabay-269077.jpg" class="imagempequena" alt="Imagem de fachada de prédio" />
                    <div>
                        <h3>Destaque 2 Destaque 2 Destaque 2</h3>
                        <div class="paragrafo1">
                            In nec erat vel tellus accumsan rhoncus non eu ipsum. Donec
                            tempus, quam vel aliquet vestibulum, erat augue cursus metus,
                            et venenatis nulla ante non est. Vestibulum nisl sapien,
                            sollicitudin in ultricies nec, luctus sit amet sapien. Fusce
                            diam ex, viverra sed tristique vitae, vestibulum eu eros.
                        </div>
                        <div class="botaoleiamais">
                            <a href="pagina-artigo.html" class="botaoleiacompleto">Leia Completo</a>
                        </div>
                    </div>
                </div>

                <div class="imagensdestaques">
                    <img src="img/pexels-pixabay-269077.jpg" class="imagempequena" alt="Imagem de fachada de prédio" />
                    <div>
                        <h3>Destaque 3 Destaque 3 Destaque 3</h3>
                        <div class="paragrafo1">
                            In nec erat vel tellus accumsan rhoncus non eu ipsum. Donec
                            tempus, quam vel aliquet vestibulum, erat augue cursus metus,
                            et venenatis nulla ante non est. Vestibulum nisl sapien,
                            sollicitudin in ultricies nec, luctus sit amet sapien. Fusce
                            diam ex, viverra sed tristique vitae, vestibulum eu eros.
                        </div>
                        <div class="botaoleiamais">
                            <a href="pagina-artigo.html" class="botaoleiacompleto">Leia Completo</a>
                        </div>
                    </div>
                </div>

                <div class="imagensdestaques">
                    <img src="img/pexels-pixabay-269077.jpg" class="imagempequena" alt="Imagem de fachada de prédio" />
                    <div>
                        <h3>Destaque 4 Destaque 4 Destaque 4</h3>
                        <div class="paragrafo1">
                            In nec erat vel tellus accumsan rhoncus non eu ipsum. Donec
                            tempus, quam vel aliquet vestibulum, erat augue cursus metus,
                            et venenatis nulla ante non est. Vestibulum nisl sapien,
                            sollicitudin in ultricies nec, luctus sit amet sapien. Fusce
                            diam ex, viverra sed tristique vitae, vestibulum eu eros.
                        </div>
                        <div class="botaoleiamais">
                            <a href="pagina-artigo.html" class="botaoleiacompleto">Leia Completo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr id="linhacentral" />

        <!-- ARTIGOS ARTIGOS ARTIGOS ARTIGOS -->
        <div class="titulosecao">
            <h2>ARTIGOS</h2>
        </div>

        <div class="colunaartigos">
            <div class="artigosesquerda">
                <div class="artigos">
                    <h3>Artigos 1 Artigos 1 Artigos 1</h3>
                    <div class="paragrafo1">
                        In nec erat vel tellus accumsan rhoncus non eu ipsum. Donec
                        tempus, quam vel aliquet vestibulum, erat augue cursus metus, et
                        venenatis nulla ante non est. Vestibulum nisl sapien,
                        sollicitudin in ultricies nec, luctus sit amet sapien. Fusce
                        diam ex, viverra sed tristique vitae, vestibulum eu eros.
                    </div>
                    <div class="botaoleiamais">
                        <a href="pagina-artigo.html" class="botaoleiacompleto">Saiba Mais</a>
                    </div>
                </div>

                <div class="artigos">
                    <h3>Artigos 2 Artigos 2 Artigos 2</h3>
                    <div class="paragrafo1">
                        In nec erat vel tellus accumsan rhoncus non eu ipsum. Donec
                        tempus, quam vel aliquet vestibulum, erat augue cursus metus, et
                        venenatis nulla ante non est. Vestibulum nisl sapien,
                        sollicitudin in ultricies nec, luctus sit amet sapien. Fusce
                        diam ex, viverra sed tristique vitae, vestibulum eu eros.
                    </div>
                    <div class="botaoleiamais">
                        <a href="pagina-artigo.html" class="botaoleiacompleto">Saiba Mais</a>
                    </div>
                </div>

                <div class="artigos">
                    <h3>Artigos 3 Artigos 3 Artigos 3</h3>
                    <div class="paragrafo1">
                        In nec erat vel tellus accumsan rhoncus non eu ipsum. Donec
                        tempus, quam vel aliquet vestibulum, erat augue cursus metus, et
                        venenatis nulla ante non est. Vestibulum nisl sapien,
                        sollicitudin in ultricies nec, luctus sit amet sapien. Fusce
                        diam ex, viverra sed tristique vitae, vestibulum eu eros.
                    </div>
                    <div class="botaoleiamais">
                        <a href="pagina-artigo.html" class="botaoleiacompleto">Saiba Mais</a>
                    </div>
                </div>
            </div>

            <!-- ARTIGOS DIREITA DIREITA DIRTETIA  -->
            <div class="artigosedireita">
                <div class="artigos">
                    <h3>Artigos 4 Artigos 4 Artigos 4</h3>
                    <div class="paragrafo1">
                        In nec erat vel tellus accumsan rhoncus non eu ipsum. Donec
                        tempus, quam vel aliquet vestibulum, erat augue cursus metus, et
                        venenatis nulla ante non est. Vestibulum nisl sapien,
                        sollicitudin in ultricies nec, luctus sit amet sapien. Fusce
                        diam ex, viverra sed tristique vitae, vestibulum eu eros.
                    </div>
                    <div class="botaoleiamais">
                        <a href="pagina-artigo.html" class="botaoleiacompleto">Saiba Mais</a>
                    </div>
                </div>

                <div class="artigos">
                    <h3>Artigos 5 Artigos 5 Artigos 5</h3>
                    <div class="paragrafo1">
                        In nec erat vel tellus accumsan rhoncus non eu ipsum. Donec
                        tempus, quam vel aliquet vestibulum, erat augue cursus metus, et
                        venenatis nulla ante non est. Vestibulum nisl sapien,
                        sollicitudin in ultricies nec, luctus sit amet sapien. Fusce
                        diam ex, viverra sed tristique vitae, vestibulum eu eros.
                    </div>
                    <div class="botaoleiamais">
                        <a href="pagina-artigo.html" class="botaoleiacompleto">Saiba Mais</a>
                    </div>
                </div>

                <div class="artigos">
                    <h3>Artigos 6 Artigos 6 Artigos 6</h3>
                    <div class="paragrafo1">
                        In nec erat vel tellus accumsan rhoncus non eu ipsum. Donec
                        tempus, quam vel aliquet vestibulum, erat augue cursus metus, et
                        venenatis nulla ante non est. Vestibulum nisl sapien,
                        sollicitudin in ultricies nec, luctus sit amet sapien. Fusce
                        diam ex, viverra sed tristique vitae, vestibulum eu eros.
                    </div>
                    <div class="botaoleiamais">
                        <a href="pagina-artigo.html" class="botaoleiacompleto">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
