<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comentarios extends Model
{
    protected $table ="comentarios";
    protected $fillable=[
        "title",
        "post_id",
        "content",
    ];
}
