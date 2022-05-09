<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\View;

class PostSingleController extends Controller
{
    public function show($postId = 1) {
        $post = Post::find($postId);

        if(View::exists('post-single')) {
            if(empty($post)) {
                abort(404);
            }

            $first_post_id = Post::orderBy('id', 'DESC')->first()->id;
            $last_post_id = Post::orderBy('id', 'ASC')->first()->id;

            return view('post-single', ['post' => $post, 'first_post_id' => $first_post_id, 'last_post_id' => $last_post_id]);
        } else {
            abort(404);
        }
    }

}
