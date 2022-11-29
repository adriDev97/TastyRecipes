<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentUser;
use Illuminate\Http\Request;

class LikeCommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');	
    }
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
        $request->validate(['comment_id' => 'required', 'user_id' => 'required']);
        $likeComment = new CommentUser;
        $likeComment->comment_id = $request->comment_id;
        $likeComment->user_id = $request->user_id;
        $likeComment->save();
        return redirect()->back();

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommentUser  $commentUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentUser $likeComment)
    {
        $likeComment->delete();
        return redirect()->back();
    }
}
