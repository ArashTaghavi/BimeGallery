<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class VideoCategoryController extends Controller
{

    public function index($slug)
    {
        $category = Category::whereSlug($slug)->first();
        $posts = Post::video()->whereCategoryId($category->id)->get();
        $title = $category->title;
        $categories = Category::published()->get();

        return view('site.image-category', compact('posts','title','categories'));
    }


}
