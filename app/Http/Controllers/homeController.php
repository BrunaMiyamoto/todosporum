<?php

namespace App\Http\Controllers;

use App\Models\Aprenda_sobre;
use App\Models\Postagem;
use App\Models\Tag;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {

        return view("index");
    }

    public function forumDuvidas(Request $request)
    {
        $forum = Postagem::where('categorias', 'duvida')->with("tags", "usuario", "curtidas");


        if ($request->filled("pesquisarPublicacao")) {
            $busca = $request->pesquisarPublicacao;
            $forum->where(function ($query) use ($busca) {
                $query->where("titulo", "like", "%{$busca}%")->orWhere("conteudo", "like", "%{$busca}%");
            });
        }

        if ($request->filled("tags")) {
            $forum->whereHas("tags", function ($query) use ($request) {
                $query->whereIn("tags.id", $request->tags);
            });
        }


        $forum = $forum->orderByDesc('updated_at')->paginate(3)->withQueryString();

        return view("forum-duvidas", [
            "forum" => $forum,
            "tags" => Tag::all()
        ]);
    }

    public function forumProjetos(Request $request)
    {
        $forum = Postagem::where('categorias', 'projeto')->with("tags", "usuario", "curtidas");

        if ($request->filled("pesquisarPublicacao")) {
            $busca = $request->pesquisarPublicacao;
            $forum->where(function ($query) use ($busca) {
                $query->where("titulo", "like", "%{$busca}%")->orWhere("conteudo", "like", "%{$busca}%");
            });
        }

        if ($request->filled("tags")) {
            $forum->whereHas("tags", function ($query) use ($request) {
                $query->whereIn("tags.id", $request->tags);
            });
        }


        $forum = $forum->orderByDesc('updated_at')->paginate(3)->withQueryString();


        return view("forum-projetos", [
            "forum" => $forum,
            "tags" => Tag::all()
        ]);
    }

    public function forumReclamacoes(Request $request)
    {
        $forum = Postagem::where('categorias', 'reclamacao')->with("tags", "usuario", "curtidas");


        if ($request->filled("pesquisarPublicacao")) {
            $busca = $request->pesquisarPublicacao;
            $forum->where(function ($query) use ($busca) {
                $query->where("titulo", "like", "%{$busca}%")->orWhere("conteudo", "like", "%{$busca}%");
            });
        }

        if ($request->filled("tags")) {
            $forum->whereHas("tags", function ($query) use ($request) {
                $query->whereIn("tags.id", $request->tags);
            });
        }


        $forum = $forum->orderByDesc('updated_at')->paginate(3)->withQueryString();

        return view("forum-reclamacoes", [
            "forum" => $forum,
            "tags" => Tag::all()
        ]);
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
        $videos = Aprenda_sobre::where('tipo', 'video')->orderByDesc('created_at')->get();

        return view("aprenda-videos", [
            "videos" => $videos
        ]);
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
