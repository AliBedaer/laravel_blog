<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentsRequest;
use App\Models\Comment;
use Auth;

class CommentsController extends Controller
{

    /**
     * @param CommentsRequest $request
     * @param $article_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeComment(CommentsRequest $request)
    {
        // append article id and user id to comment request
//        $request->request->add(["user_id"=>Auth::user()->id]);

        if ($comment = Comment::create($request->all())){
            return response()->json(['comment'=>$comment, "status"=>true]);
        }

        return response()->json(['message'=>"Failed To Add Comment", "status"=>false]);
    }

    /**
     * @param $article_id
     * @return mixed
     */
    public function getArticleComments($article_id)
    {
        // get all comments for article with id
        $comments = Comment::where('article_id',$article_id)->with('owner')->orderBy('created_at',"DESC")->get();
        return $comments;
    }
}
