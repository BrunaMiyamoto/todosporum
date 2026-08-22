<?php

use App\Http\Controllers\Admin\AcessibilidadeController;
use App\Http\Controllers\Admin\AprendaSobreController;
use App\Http\Controllers\Admin\PostagemController;

use App\Http\Controllers\Admin\PerfilController;
use App\Http\Controllers\Admin\PerfilPublicoController;
use App\Http\Controllers\Admin\SegurPrivaController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\CadastroUsuarioController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistroUsuarioController;
use Illuminate\Support\Facades\Route;

Route::get("/", [homeController::class, "home"])->name("home");

Route::get("/forumduvidas", [homeController::class, "forumDuvidas"])->name("forumDuvidas");

Route::get("/forumprojetos", [homeController::class, "forumProjetos"])->name("forumProjetos");

Route::get("/forumreclamacoes", [homeController::class, "forumReclamacoes"])->name("forumReclamacoes");

Route::get("/aprendavideos", [homeController::class, "aprendaVideos"])->name("aprendaVideos");

Route::get("/aprendasobre", [homeController::class, "aprendaSobre"])->name("aprendaSobre");

Route::get("/paginaartigo", [homeController::class, "paginaArtigo"])->name("paginaArtigo");

Route::get("/paginaartigo2", [homeController::class, "paginaArtigo2"])->name("paginaArtigo2");
Route::get("/paginaartigo3", [homeController::class, "paginaArtigo3"])->name("paginaArtigo3");
Route::get("/paginaartigo4", [homeController::class, "paginaArtigo4"])->name("paginaArtigo4");
Route::get("/paginaartigo5", [homeController::class, "paginaArtigo5"])->name("paginaArtigo5");
Route::get("/paginaartigo6", [homeController::class, "paginaArtigo6"])->name("paginaArtigo6");

Route::get("/paginavideo", [homeController::class, "paginaVideo"])->name("paginaVideo");

Route::get("/sobrenos", [homeController::class, "sobreNos"])->name("sobreNos");

Route::get("/contato", [homeController::class, "contato"])->name("contato");

Route::get("/politicacookies", [homeController::class, "politicaCookies"])->name("politicaCookies");

Route::get("/politicaprivacidade", [homeController::class, "politicaPrivacidade"])->name("politicaPrivacidade");

Route::get("/segurancaprivacidade", [homeController::class, "segurancaPrivacidade"])->name("segurancaPrivacidade");

Route::get("/termosdeuso", [homeController::class, "termosUso"])->name("termosUso");


Route::get("/cadastro", [CadastroUsuarioController::class, "create"])->name("cadastro");

Route::post("/cadastro", [CadastroUsuarioController::class, "store"]);




//ROTAS DE ARQUIVOS DE AUTENTICAÇÃO 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(['auth', 'admin'])->group(function () {

        Route::get("/dashboard/usuarios", [UsuarioController::class, "index"])->name("admin.usuarios.index");

        Route::delete("/dashboard/usuarios/excluir/{id}", [UsuarioController::class, "destroy"])->name("admin.usuarios.excluir");

        Route::put("/dashboard/usuarios/suspender/{id}", [UsuarioController::class, "suspender"])->name("admin.usuarios.suspender");

        Route::put("/dashboard/usuarios/promover/{id}", [UsuarioController::class, "promover"])->name("admin.usuarios.promover");
    });

    Route::middleware(['auth', 'moderador'])->group(function () {

        Route::get("/dashboard/moderacao", [PostagemController::class, "moderacao"])->name("admin.postagem.moderacao");
    });




    //ACESSIBILIDADE

    Route::get("/dashboard/acessibilidade", [AcessibilidadeController::class, "index"])->name("admin.acessibilidade.index");



    //POSTAGENS

    Route::get("/dashboard/postagens", [PostagemController::class, "index"])->name("admin.postagem.index");

    Route::post("/dashboard/postagens/cadastrar", [PostagemController::class, "store"])->name("admin.postagem.armazenar");

    Route::get("/dashboard/postagens/cadastrar", [PostagemController::class, "create"])->name("admin.postagem.cadastrar");

    Route::get("/dashboard/postagens/editar/{id}", [PostagemController::class, "edit"])->name("admin.postagem.editar");

    Route::put("/dashboard/postagens/atualizar/{id}", [PostagemController::class, "update"])->name("admin.postagem.atualizar");

    Route::delete("/dashboard/postagens/excluir/{id}", [PostagemController::class, "destroy"])->name("admin.postagem.excluir");


    //APRENDA SOBRE

    Route::get("/dashboard/aprendasobre", [AprendaSobreController::class, "index"])->name("admin.aprendaSobre.index");

    Route::post("/dashboard/aprendasobre/cadastrar", [AprendaSobreController::class, "store"])->name("admin.aprendaSobre.armazenar");

    Route::get("/dashboard/aprendasobre/cadastrar", [AprendaSobreController::class, "create"])->name("admin.aprendaSobre.cadastrar");

    Route::get("/dashboard/aprendasobre/editar/{id}", [AprendaSobreController::class, "edit"])->name("admin.aprendaSobre.editar");

    Route::put("/dashboard/aprendasobre/atualizar/{id}", [AprendaSobreController::class, "update"])->name("admin.aprendaSobre.atualizar");

    Route::delete("/dashboard/aprendasobre/excluir/{id}", [AprendaSobreController::class, "destroy"])->name("admin.aprendaSobre.excluir");



    //PERFIL

    Route::get("/dashboard/suaconta", [PerfilController::class, "index"])->name("admin.perfil.index");
    Route::get("/dashboard/suaconta/editar/{id}", [PerfilController::class, "edit"])->name("admin.perfil.editar");
    Route::put("/dashboard/suaconta/atualizar/{id}", [PerfilController::class, "update"])->name("admin.perfil.atualizar");
});

require __DIR__ . '/auth.php';