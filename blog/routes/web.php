<?php

use Illuminate\Support\Facades\Route;
//ENDPOINT
Route::get('/', function () {
    return view('welcome');
});
Route::get("/empanadas",function(){
    return view('empanadas');
});
Route::get("/post",function(){
    return view('post');
});
Route::get("/post",function(){
    return view('about');
});
Route::get("/about",function(){
    return view('about');
});