<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group wh   ich
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('index');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/post/create', function () {
    DB::table('post')->insert([
        'title' => 'title',
        'body' => 'body'
    ]);
});

Route::get('post', function() {
    $post = Post::find(2);
    return $post;
});

Route::get('blog/index', [BlogController::class, 'index']);
Route::get('blog/create', function(){
    return view('blog.create');
});
Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');
Route::get('post/{id}', [BlogController::class, 'get_post']);

Route::post('form/upload', [UploadController::class, 'uploadsubmit'])->name('add-form');
Route::get('form/upload', [UploadController::class,'uploadform']);
Route::get('mail/send',[MailController::class, 'send']);