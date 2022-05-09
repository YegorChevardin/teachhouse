<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Post;

class PostController extends Controller
{
    public function getPosts() {
        if(View::exists('blog')) {
            $posts = Post::orderBy('id', 'DESC')->where('status', 'published')->paginate(9);

            return view('blog', ['posts' => $posts]);
        } else {
            abort(404);
        }
    }
}
