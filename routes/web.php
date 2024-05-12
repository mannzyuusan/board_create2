<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [PostController::class, 'cover'])->name('home.cover');
    Route::get('/home/create', [PostController::class, 'create'])->name('home.create');
    Route::post('/posts',[PostController::class, 'store'])->name('home.store');
//いいね機能のルーティング追加
    Route::get('/home/like/{id}', [LikeController::class,'like'])->name('reply.like');
    Route::get('/home/unlike/{id}',[LikeController::class,'unlike'] )->name('reply.unlike');
//いいね機能のソート追加
    Route::get('/like/sort',[PostController::class,'index'])->name('like.sort');
    //このcoverが一番サイトのはじめになる
    Route::get('/main',[PostController::class,'cover'])->name('home.main');
    
    
    
   
    //メインページからそれぞれの科目に飛ぶルーティング
    Route::get('/home/{category}',[PostController::class,'index'])->name('home.index'); 
    
    
    
    //詳細画面に行くshow
    
    Route::get('/home/{category}/{post}',[PostController::class,'show']);//home/31/1
    
    

    
});









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
