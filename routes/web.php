<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\Admin\Post;
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




Route::get('/', [HomeController::class, 'index'])->name('home');





Route::get('/posts/update',[PostController::class,'update']);
Route::get('/posts/delete',[PostController::class,'delete']);
Route::get('/posts/first_or_create',[PostController::class,'firstOrCreate']);
Route::get('/posts/update_or_create',[PostController::class,'updateOrCreate']);




Route::group(['namespace'=>'App\Http\Controllers\Post'], function () {
    Route::get('/posts', IndexController::class)->name('post.index');
    Route::get('/posts/create', CreateController::class)->name('post.create');

    Route::post('/posts', StoreController::class)->name('post.store');
    Route::get('/posts/{post}', ShowController::class)->name('post.show');
    Route::get('/posts/{post}/edit', EditController::class)->name('post.edit');
    Route::patch('/posts/{post}', UpdateController::class)->name('post.update');
    Route::delete('/posts/{post}', DestroyController::class)->name('post.delete');
});



Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin','middleware'=>'admin'], function () {

    Route::group(['namespace' => 'Post'], function () {

        Route::get('/post', 'IndexController')->name('admin.post.index');

    });

});

Route::get('/about',[AboutController::class,'index'])->name('about.index');



Route::get('/main',[MainController::class,'index'])->name('main.index');





Route::get('/musics',[MusicController::class,'index'])->name('music.index');
Route::get('/musics/create',[MusicController::class,'create'])->name('music.create');
Route::post('/musics',[MusicController::class,'store'])->name('music.store');

Route::get('/musics/{music}',[MusicController::class,'show'])->name('music.show');
Route::get('/musics/{music}/edit',[MusicController::class,'edit'])->name('music.edit');
Route::patch('/musics/{music}',[MusicController::class,'update'])->name('music.update');
Route::delete('/musics/{music}',[MusicController::class,'destroy'])->name('music.delete');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
