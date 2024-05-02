<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Thread;
use App\Http\Requests\PostRequest;
use Auth;
use Cloudinary;  

class PostController extends Controller
{
    public function index(Request $request, $categoryId = null )
{
    $keyword = $request->input('keyword');

    $query = Post::query();

    if (!empty($keyword)) {
        $query->where('title', 'LIKE', "%{$keyword}%")
            ->orWhere('body', 'LIKE', "%{$keyword}%");
    }

    // カテゴリーIDが指定されている場合はそのカテゴリーに属する投稿のみを取得
    if (!empty($categoryId)) {
        $query->where('category_id', $categoryId);
    }

    $posts = $query->withCount('likes')
                   ->orderBy('likes_count', 'desc')
                   ->paginate(10);
                   
    return view('home.index', compact('posts', 'keyword', 'categoryId'));
}



    public function cover(Category $category){
        return view('home.main')->with(['categories'=> $category->get()]);
    }
    
    public function show(Post $post){
        return view('home.show')->with(['post' => $post]);
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
        
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
       
        
        $input = $request['post'];
        $input['user_id'] = Auth::id();//これでuser_idも取得できる
        $input += ['image_url' => $image_url];
        $post->fill($input)->save();
        return redirect('/home/');
    }
    

}
