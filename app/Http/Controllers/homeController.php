<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {

        return view("index");
    }

    public function forumDuvidas()
    {

        return view("forum-duvidas");
    }

    public function forumProjetos()
    {

        return view("forum-projetos");
    }

    public function forumReclamacoes()
    {

        return view("forum-reclamacoes");
    }

    public function aprendaSobre()
    {

        return view("aprenda-sobre");
    }

    public function aprendaVideos()
    {

        return view("aprenda-videos");
    }

    public function paginaArtigo()
    {

        return view("pagina-artigo");
    }
    public function paginaVideo()
    {

        return view("pagina-video");
    }

    public function sobreNos()
    {

        return view("sobre-nos");
    }

    public function contato()
    {

        return view("contato");
    }
    public function politicaCookies()
    {

        return view("politica-de-cookies");
    }
    public function politicaPrivacidade()
    {

        return view("politica-privacidade");
    }
    public function segurancaPrivacidade()
    {

        return view("seguranca-privacidade");
    }

    public function termosUso()
    {

        return view("termos-uso");
    }
}
