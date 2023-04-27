<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\isNull;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $posts = Post::all();
    //dd ($posts);
    return view('posts', [
        'posts' => $posts
    ]);
});


Route::get('posts/{post}', function ($id) {

    //dd ($id);
    
    $post = Post::findOrFail($id);
    // ddd ($post);
    return view ('post',['post',$post]);
     /*return view('post', [
        Post::findOrFail($id)
    ]);*/
});
