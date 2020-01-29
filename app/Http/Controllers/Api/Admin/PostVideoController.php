<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostVideoController extends BaseController
{
    public function index()
    {
        return Post::video()->with('category:categories.id,categories.title')->get();
    }


    public function get($id)
    {
        return Post::video()->whereId($id)->with('category')->first();
    }

    public function store(Request $request)
    {
        $this->handleValidate($request);
        $post = new Post();
        $post->url = Session::get('upload-video')[0];
        $post->is_video = 1;
        $post->fill($request->except('url'));
        $post->save();

        Session::forget('upload-video');

        return $this->successNotify();

    }


    public function update(Request $request, $id)
    {
        $this->handleValidate($request);

        $post = Post::where('id', $id)->first();

        $post->fill($request->except('url'));
        $post->url = Session::get('upload-video')[0];
        $post->save();
        Session::forget('upload-video');

        return $this->successNotify();

    }

    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);


        if ($validator->fails()) {
            abort(403, $validator->errors()->first());
        }


        return $validator->getData();
    }

    public function destroy(Post $post)
    {
        $post->delete();
        unlink(public_path($post->url));

        return $this->deleteNotify();
    }


    public function uploadVideo()
    {
        Session::forget('upload-video');
        $file = request()->file('file');

        $file_name = time() . '-' . $file->getClientOriginalName();
        $dir = "/uploads/post-video";
        $file->move(public_path($dir), $file_name);
        Session::push('upload-video', "{$dir}/$file_name");
    }


}
