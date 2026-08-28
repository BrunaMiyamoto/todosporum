<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    protected $table = "tags";
    public $timestamps = false;

    public function postagens(): BelongsToMany
    {
        return $this->belongsToMany(Postagem::class, "postagens_has_tags", "tag_id", "postagem_id");
    }
}
