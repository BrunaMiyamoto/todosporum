<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
}

// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Tag extends Model
// {
//     public $timestamps =  false;

//     protected $fillable = ['nome'];

//     public function postagens()
//     {
//         return $this->belongsToMany(
//         Postagem::class,
//         'postagens_has_tags',
//         'tag_id',
//         'postagem_id'
//         );
//     }
// }
