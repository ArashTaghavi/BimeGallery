<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Post;
use Illuminate\Http\Request;

class PostImageController extends BaseController
{
    public function index()
    {
        return Post::image()->with('category:categories.id,categories.title')->get();
    }


    public function get($id)
    {
        return Post::image()->whereId($id)->with('category')->first();
    }

    public function store(Request $request)
    {
        $this->handleValidate($request);

        $post = new Post();
        $post->fill($request->except('url'));
        $post->fillImage($request);
        $post->save();

        return $this->successNotify();

    }


    public function update(Request $request, $id)
    {
        $this->handleValidate($request);

        $post = Post::where('id', $id)->first();

        $post->fill($request->all());
        if ($post->isDirty('url')) {
            $post->fillImage($request);
            $post->unlinkOriginalImage();
        }
        $post->save();

        return $this->successNotify();

    }

    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'url' => 'required'
        ]);


        if ($validator->fails()) {
            abort(403, $validator->errors()->first());
        }


        return $validator->getData();
    }

    public function destroy(Post $post)
    {
        $post->delete();
        $post->unlinkOriginalImage();

        return $this->deleteNotify();
    }


}
