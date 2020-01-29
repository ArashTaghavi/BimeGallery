<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class CommentController extends BaseController
{
    public function approved()
    {
        return Comment::approved()->orderBy('created_at', 'ASC')->get();
    }


    public function pending()
    {
        return Comment::pending()->orderBy('created_at', 'ASC')->get();
    }

    public function doApprove(Comment $comment)
    {
        $comment->approved = 1;
        $comment->save();
        return $this->successNotify();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return $this->deleteNotify();
    }
}
