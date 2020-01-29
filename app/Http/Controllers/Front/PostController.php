<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($slug)
    {
        $post = Post::with(['comments' => function ($query) {
            return $query->orderBy('created_at', 'DESC')->whereApproved(1);
        }])->where('slug', $slug)->first();

        $categories = Category::published()->get();

        $is_liked = request()->hasCookie($slug) ? true : false;
        if (!request()->hasCookie($slug.$post->id)) {
            cookie()->queue(cookie($slug.$post->id, true, 60 * 24 * 365));
            $post = Post::where('slug', $slug)->first();
            if ($post != null)
                $post->increment('view_count');
        }

        return view('site.post', compact('post', 'categories', 'is_liked'));
    }


    public function like($slug)
    {
        if (!request()->hasCookie($slug)) {
            cookie()->queue(cookie($slug, true, 60 * 24 * 365));
            $post = Post::where('slug', $slug)->first();
            if ($post != null)
                $post->increment('popularity');
        } else {
            cookie()->queue(cookie($slug, true, 60 * 24 * 365));
            $post = Post::where('slug', $slug)->first();
            if ($post != null)
                $post->decrement('popularity');
            cookie()->queue(cookie()->forget($slug));
        }
        return back();

    }


    public function store_comment(Request $request, $id)
    {
        $comment = new Comment();
        $comment->fill($request->all());
        $comment->post_id = $id;
        $comment->save();
        return back();
    }
}
