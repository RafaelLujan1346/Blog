<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\Categoria;

class PostsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index(){
        $posts =Post::all();
        return view('admin.posts')->with('posts',$posts);
    }
    public function showAdd(){
        $categories= Categoria::all();
        return view('admin.post_add')
            ->with('categories',$categories);
    }
}
