<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class users_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name"=>"Godofredo",
            "email"=>"godofredoElMasCapo@gmail.com",
            "password"=>Hash::make("SuperPassword123!"),
            "nickname"=>"Xx_Godo_xX",
            "img"=>"default.jpg",
            "created_at"=>date("Y-m-d h:m:s")
        ]);

        for($i=0; $i<50;$i++){
            DB::table('users')->insert([
            "name"=>"RafaelLujan".$i,
            "email"=>"RafaRL".$i."@gmail.com",
            "password"=>Hash::make("1234567890"),
            "nickname"=>"El_PlatinoXD".$i,
            "img"=>"default.jpg",
            "created_at"=>date("Y-m-d h:m:s")
        ]);//fin insertar dato
    }//fin del for
        
    }
}
