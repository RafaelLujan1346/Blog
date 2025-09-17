<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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
    return view('post');
});
Route::get("/about",function(){
    return view('about');
});
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::get("/users",[UsersController::class,'getUsers']);
});

