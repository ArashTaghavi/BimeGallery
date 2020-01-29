<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        $posts = Post::image()->orderBy('popularity', 'DESC')->limit(10)->get();
        $categories = Category::published()->get();

        return view('site.index', compact('posts', 'categories'));
    }

    public function search(Request $request)
    {
        $posts = Post::where('title', 'like', "%{$request->q}%")->get();
        $title = $request->q;
        $categories = Category::published()->get();

        return view('site.category', compact('posts', 'title', 'categories'));
    }


}
