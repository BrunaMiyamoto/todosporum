<?php

namespace App\Http\Controllers;

use App\Models\Aprenda_sobre;
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
        $aprendaSobre = Aprenda_sobre::all();
        return view("aprenda-sobre", [
            "aprendaSobre" => $aprendaSobre
        ]);
    }

    public function aprendaVideos()
    {

        return view("aprenda-videos");
    }




    public function paginaArtigo()
    {

        return view("pagina-artigo");
    }

    public function paginaArtigo2()
    {

        return view("pagina-artigo2");
    }

    public function paginaArtigo3()
    {

        return view("pagina-artigo3");
    }

    public function paginaArtigo4()
    {

        return view("pagina-artigo4");
    }

    public function paginaArtigo5()
    {

        return view("pagina-artigo5");
    }

    public function paginaArtigo6()
    {

        return view("pagina-artigo6");
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
