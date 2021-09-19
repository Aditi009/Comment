<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentReply;

class CommentReplyController extends Controller
{

   
    public function store(Request $req,$comment)
    {
           $this->validate($req,
       ['rcomment'=>'required|max:1000']
        );
    $comment= new CommentReply;
   
    $comment->comment_id=$req->cid;
    $comment->user_id=5;
    $comment->message=$req->rcomment;
    $comment->save();
    return redirect()->back()->with('success','The Comment Created Successfully');
    }
    
}
