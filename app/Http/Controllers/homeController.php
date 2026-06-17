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
}
