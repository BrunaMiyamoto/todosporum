@extends('layouts.site')

@section('conteudo')
    <div class="conteudovideo">
        <video class="video" poster="img/pexels-kelly-2928232.jpg" controls>
            <source src="img/6918112_Motion_Graphics_Motion_Graphic_1080x1920.mp4" type="video/mp4" />
        </video>
        <div class="play">
            <img src="img/play-button.png" alt="botao de play" />
        </div>
    </div>
    <div class="titulosecao">
        <h3>Lorem ipsum dolor sit amet.</h3>
        <p>Escrito por: Fulaninho da Silva</p>
        <p>Publicado em: 10/10/2025</p>
    </div>
@endsection
