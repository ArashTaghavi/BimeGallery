<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index($slug)
    {
        $category = Category::whereSlug($slug)->first();
        $posts = Post::whereCategoryId($category->id)->get();
        $title = $category->title;
        $categories = Category::published()->get();

        return view('site.category', compact('posts', 'title', 'categories'));
    }


}
