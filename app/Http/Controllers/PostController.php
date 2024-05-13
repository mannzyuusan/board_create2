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
    public function index(Request $request, Category $category)
{
    
    $keyword = $request->input('keyword');

    $query = Post::query();

    if (!empty($keyword)) {
        
        $query->where('category_id', $category->id)->where('title', 'LIKE', "%{$keyword}%")
            ->orWhere('body', 'LIKE', "%{$keyword}%");
    }

    // カテゴリーIDが指定されている場合はそのカテゴリーに属する投稿のみを取得
    if (!empty($category)) {
        $query->where('category_id', $category->id);
    }

    $posts = $query->withCount('likes')
                   ->orderBy('likes_count', 'desc')
                   ->paginate(10);
                   
    return view('home.index', compact('posts', 'keyword' ,'category' ));
}



    public function cover(Category $category){
        return view('home.main')->with(['categories'=> $category->get()]);
    }
    
    public function show(Category $category, Post $post){

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
    // 画像ファイルのアップロード
    
    if ($request->hasFile('image')) {
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
    } else {
        $image_url = null; // 画像ファイルがアップロードされていない場合は null を設定
    }
    
    // PDFファイルのアップロード
    if ($request->hasFile('pdf')) {
        $pdf_url = Cloudinary::upload($request->file('pdf')->getRealPath())->getSecurePath();
    } else {
        $pdf_url = null; // PDFファイルがアップロードされていない場合は null を設定
    }
    
    // フォームデータの処理
    $input = $request['post'];
    $input['user_id'] = Auth::id();
    $input['image_url'] = $image_url;
    $input['pdf_url'] = $pdf_url;
    
    // データの保存
    $post->fill($input)->save();
    
    return redirect("/home/{$post->category_id}");
}
    

}