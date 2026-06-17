<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get("/", [homeController::class, "home"])->name("home");
Route::get("/forumduvidas", [homeController::class, "forumDuvidas"])->name("forumDuvidas");
Route::get("/forumprojetos", [homeController::class, "forumProjetos"])->name("forumProjetos");
Route::get("/forumreclamacoes", [homeController::class, "forumReclamacoes"])->name("forumReclamacoes");
Route::get("/forumduvidas", [homeController::class, "forumDuvidas"])->name("forumDuvidas");
Route::get("/forumreclamacoes", [homeController::class, "forumReclamacoes"])->name("forumReclamacoes");








//ROTAS DE ARQUIVOS DE AUTENTICAÇÃO 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
