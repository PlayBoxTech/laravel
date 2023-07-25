<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();
        

        // $posts = Post::latest()->with('category', 'author')->get();
        //dd ($posts);
        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author'])
            )->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post    
           ]);
    }

    
   
}
