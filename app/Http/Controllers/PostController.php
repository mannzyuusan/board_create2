<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }

    public function indexcreate(Category $category)
    {
        return view('home.create')->with(['categories' => $category->get()]);
    }
}
