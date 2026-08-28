<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "conteudo" => "required|min:3",
            "postagem_id" => "required|exists:postagens,id",
            "comentario_pai_id" => "nullable|exists:comentarios,id",
        ]);

        Comentario::create([
            "conteudo" => $request->conteudo,
            "usuario_id" => Auth::id(),
            "postagem_id" => $request->postagem_id,
            "comentario_pai_id" => $request->comentario_pai_id,
        ]);

        return back();
    }

    public function destroy(string $id)
    {
        $comentario = Comentario::findOrFail($id);

        if ($comentario->usuario_id !== Auth::id() && !in_array(Auth::user()->perfil, ['moderador', 'admin'])) {
            abort(403, 'Você não tem permissão para excluir este comentário');
        }

        $comentario->delete();

        return back();
    }
}
