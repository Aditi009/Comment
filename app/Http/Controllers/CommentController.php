<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;
class CommentController extends Controller
{
    //
    public function store(Request $req,$post)
    {
       $this->validate($req,
       ['comment'=>'required|max:1000']
        );
    $comment=new Comment();
    $comment->post_id=$post;
    $comment->user_id=5;
    $comment->comment=$req->comment;
    $comment->save();
    return redirect()->back()->with('success','The Comment Created Successfully');
    }
    public function post()
    {
        $cmt=Comment::all();
        return view('post')->with('cmd',$cmt);
    }
}
