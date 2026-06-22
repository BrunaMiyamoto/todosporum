<?php

use App\Http\Controllers\Admin\PostagemController;

use App\Http\Controllers\Admin\PerfilController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get("/", [homeController::class, "home"])->name("home");

Route::get("/forumduvidas", [homeController::class, "forumDuvidas"])->name("forumDuvidas");

Route::get("/forumprojetos", [homeController::class, "forumProjetos"])->name("forumProjetos");

Route::get("/forumreclamacoes", [homeController::class, "forumReclamacoes"])->name("forumReclamacoes");

Route::get("/aprendavideos", [homeController::class, "aprendaVideos"])->name("aprendaVideos");

Route::get("/aprendasobre", [homeController::class, "aprendaSobre"])->name("aprendaSobre");

Route::get("/paginaartigo", [homeController::class, "paginaArtigo"])->name("paginaArtigo");

Route::get("/paginavideo", [homeController::class, "paginaVideo"])->name("paginaVideo");

Route::get("/sobrenos", [homeController::class, "sobreNos"])->name("sobreNos");

Route::get("/contato", [homeController::class, "contato"])->name("contato");

Route::get("/politicacookies", [homeController::class, "politicaCookies"])->name("politicaCookies");

Route::get("/politicaprivacidade", [homeController::class, "politicaPrivacidade"])->name("politicaPrivacidade");

Route::get("/segurancaprivacidade", [homeController::class, "segurancaPrivacidade"])->name("segurancaPrivacidade");

Route::get("/termosdeuso", [homeController::class, "termosUso"])->name("termosUso");





//ROTAS DE ARQUIVOS DE AUTENTICAÇÃO 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get("/dashboard/postagem", [PostagemController::class, "index"])->name("admin.postagem.index");
    Route::get("/dashboard/conta", [UsuarioController::class, "index"])->name("admin.conta.index");

    Route::get("/dashboard/suaconta", [PerfilController::class, "index"])->name("admin.perfil.index");
});

require __DIR__ . '/auth.php';
