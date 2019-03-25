<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
     
    public function __construct()
    {
        $this->middleware('auth');
    }

    //showing all comments
     public function comments(){
        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
    else{
       $posts=Post::orderBy('id','desc')->paginate(8);
       $comments=Comment::all();
        return view('admin.comments')->with('posts',$posts)->with('comments',$comments);
    }
     }
     //show comments of a specific post
     public function postcomments($id){
        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
    else{
        $post=Post::find($id);
        $comments=Comment::where('commentable_id',$id)->get();
        return view('admin.postcomments')->with('post',$post)->with('comments',$comments);
    }

     }
     // delete comment
     public function commentdelete($id){
        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
    else{
      $comment=Comment::find($id);
      $return=$comment->commentable_id;
      $comment->delete();
      return redirect('/postcomments/'.$return);
    }
     }
}
