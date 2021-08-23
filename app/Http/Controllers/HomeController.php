<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $post = Post::all();
        return view('template.index', ['post'=>$post]);
    }
}
