<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            "title"=>"Como cuidar las suculentas",
            "description"=>"Aprende como cuidar y regarlas",
            "img"=>"default.jpg",
            "content"=> "contenido del post",
            "likes"=>0,
            "slug"=>"como-cuidar-suculentas",
            "user_id"=>1,
            "categories_id"=>1,
            "created_at"=>date("Y-m-d h:m:s")
        ]);

        DB::table('posts')->insert([
            "title"=>"Oreja de elefante",
            "description"=>"Aprende como cuidar y como regarlas",
            "img"=>"default.jpg",
            "content"=> "contenido del post",
            "likes"=>0,
            "slug"=>"como-cuidar-suculentas",
            "user_id"=>1,
            "categories_id"=>1,
            "created_at"=>date("Y-m-d h:m:s")
        ]);
    }
}
