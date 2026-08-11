<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    protected $table = 'postagens';
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