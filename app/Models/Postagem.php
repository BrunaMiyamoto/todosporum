<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Postagem extends Model
{
    protected $table = 'postagens';

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, "postagens_has_tags", "postagem_id", "tag_id");
    }

    public function curtidas(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "postagem_curtidas", "postagem_id", "usuario_id")->withTimestamps();
    }

    public function comentarios(): HasMany
    {
        return $this->hasMany(Comentario::class, 'postagem_id')
            ->whereNull('comentario_pai_id')
            ->with('usuario', 'respostas');
    }
}
