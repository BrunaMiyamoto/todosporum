<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comentario extends Model
{
    protected $table = 'comentarios';
    protected $fillable = ['conteudo', 'usuario_id', 'postagem_id', 'comentario_pai_id', 'excluido'];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function postagem(): BelongsTo
    {
        return $this->belongsTo(Postagem::class, 'postagem_id');
    }

    public function respostas(): HasMany
    {
        return $this->hasMany(Comentario::class, 'comentario_pai_id')->with('usuario', 'respostas');
    }
}
