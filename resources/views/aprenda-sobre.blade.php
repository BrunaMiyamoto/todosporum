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
        </div>
        <div class="campos">
            <!-- DESTAQUES ESQUERDA DESTAQUES ESQUERDA!!!!!!!!!!! -->
            <div class="destaqueesquerda">
                <img src="img/pexels-pixabay-269077.jpg" class="imagemgrande" alt="Imagem de fachada de prédio" />
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
