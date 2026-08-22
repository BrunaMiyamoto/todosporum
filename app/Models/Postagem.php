<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Postagem extends Model
{
    protected $table = 'postagens';

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}


// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Postagem extends Model
// {
//     protected $table = 'postagens';

//     public function tags()
//     {
//         return $this->belongsToMany(
//             Postagem::class,
//             'postagens_has_tags',
//             'postagem_id',
//             'tag_id'
           
//         );
//     }
// }