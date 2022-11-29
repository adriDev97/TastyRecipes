<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentUser;
use Illuminate\Http\Request;

class CommentUserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CommentUser::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $likeComment = new CommentUser;
        $likeComment->comment_id = $request->comment_id;
        $likeComment->user_id = $request->user_id;
        $likeComment->save();
        return ['likeComment' => $likeComment];
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommentUser  $commentUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentUser $likeComment)
    {
        $likeComment = Comment::find($likeComment->id);
        if (!$likeComment) return ['error' => 'likeComment is not present'];
        $likeComment->delete();
        return ['localLike' => false];
    }
}
