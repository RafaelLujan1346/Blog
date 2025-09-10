<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table ="posts";
    protected $fillable=[
        "title",
        "descriptions",
        "img",
        "content",
        "likes",
        "slug",
        "user_id",
        "categories_id"
    ];
}

