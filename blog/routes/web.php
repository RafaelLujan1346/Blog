<?php

use Illuminate\Support\Facades\Route;
//ENDPOINT
Route::get('/', function () {
    return view('welcome');
});
Route::get("/empanadas",function(){
    return view('empanadas');
});