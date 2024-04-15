<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Thread;
use App\Http\Requests\PostRequest;
use Auth;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('home.index')->with(['posts' => $post->getPaginateByLimit(2)]);
        //return view('home.index')->with(['posts' => $post->get()]);
    }

    public function create(Request $request, Category $category, Thread $thread)
    {
        return view('home.create')->with([
        'categories' => $category->get(),
        'threads' => $thread->get()]);
    }
    
    public function createthread(Thread $thread)
    {
        return view('home.create')->with(['threads' => $thread->get()]);
    }
    

    public function store(PostRequest $request, Post $post)
    {
        
        $input = $request['post'];
        $input['user_id'] = Auth::id();//これでuser_idも取得できる
        $post->fill($input)->save();
        return redirect('/home/');
    }
    
    
}
