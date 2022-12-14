<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function index(){
        $posts = Post::paginate(2);
        return view('public.index',compact('posts'));
    }
}
