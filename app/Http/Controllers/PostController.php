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
    public function index(Post $post,Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Post::query();

        if(!empty($keyword)) {
            $query->where('title', 'LIKE', "%{$keyword}%")
                ->orWhere('body', 'LIKE', "%{$keyword}%");
        }

        $posts = $query->withCount('likes')
                       ->orderBy('likes_count', 'desc')
                       ->paginate(2);
                       
        return view('home.index',compact('posts','keyword'));
        //getPaginateByLimit()はPost.phpで定義したメソッドです。
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
