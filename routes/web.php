<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RepliesController;

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
    Route::get('/', [PostController::class, 'index'])->name('home.index');
    Route::get('/home', [PostController::class, 'index'])->name('home.index');
    Route::get('/home/create', [PostController::class, 'create'])->name('home.create');
    Route::post('/posts',[PostController::class, 'store'])->name('home.store');
//いいね機能のルーティング追加
    Route::get('/reply/like/{id}', [RepliesController::class,'like'])->name('reply.like');
    Route::get('/reply/unlike/{id}',[RepliesController::class,'unlike'] )->name('reply.unlike');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
