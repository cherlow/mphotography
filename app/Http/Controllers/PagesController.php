<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feed;
use App\Post;
use App\Comment;
use App\User;
use App\Message;
use App\Review;
use App\Event;
use App\Image;
use App\Reservation;
use App\Notification;
class PagesController extends Controller
{
  // index return view
    public function index(){
      $reviews=Review::where('status','active')->get();
     $images=Feed::where('category','!=','instagram')->orderBy('created_at','desc')->take(8)->get();
      $posts=Post::take(3)->get();
      return view('pages.index')->with('images',$images)->with('posts',$posts)->with('reviews',$reviews);
    }


  // About return view
  public function about(){
    $title='About Page';
    return view('pages.about')->with('title',$title);
  }

// services return view

public function services(){
  $title='Services page';

  return view('pages.services')->with('title',$title);
}

// return gallery view

public function gallery(){
  $title='Gallery page';
  $images=Feed::where('category','!=','instagram')->orderBy('created_at','desc')->get();

  return view('pages.gallery')->with('title',$title)->with('images',$images);
}

// return events view

public function events(){
  $events=Event::take(9)->get();
   $images=Image::all();
  $title='events page';
  return view('pages.eventss')->with('title',$title)->with('events',$events)->with('images',$images);
}

// return the blog view

public function blog(){
  $posts=Post::where('status','posted')->get();

  return view('pages.blog')->with('posts',$posts);
}

// return the contact view

public function contact(){
  $title='contact page';
  return view('pages.contact')->with('title',$title);
}

// return blog details
public function blogdetails($id){
  $title='Blog -> Blog Details';
   $populars=Post::where('status','posted')->take(10)->get();
  
  $post=Post::find($id);
  return view('pages.blogdetails')->with('id',$id)->with('title',$title)->with('post',$post)->with('populars',$populars);
}

// return blog details
public function blogcomment(Request $request){
//  authentication goes here

if($request->input('mode')=='uli'){
 $user=User::where('id',auth()->user()->id)->first();
$comment=new Comment;
$comment->commentable_type="blog";
$comment->commentable_id=$request->input('post');
$comment->comment=$request->input('message');
$comment->commentor_body=$user->name;
$comment->commentor_email=$user->email;
$comment->save();
 return redirect('/blogdetails/'.$request->input('post'));
}
else{

  $comment=new Comment;
$comment->commentable_type="blog";
$comment->commentable_id=$request->input('post');
$comment->comment=$request->input('message');
$comment->commentor_body=$request->input('name');
$comment->commentor_email=$request->input('email');
$comment->save();
 return redirect('/blogdetails/'.$request->input('post'));
}

}

// message post goes here

public function messagepost(Request $request){
  //  authentication goes here
  
  if($request->input('mode')=='uli'){
$message=new Message;
 $message->name=auth()->user()->name;
 $message->email=auth()->user()->email;
 $message->subject=$request->input('subject');
 $message->message=$request->input('message');
 
 $message->save();

 $notification=new Notification;
 $notification->type='message';
 $notification->notifier_name=$message->name;
 $notification->notifier_id=$message->id;
 $notification->body="Send You A Message";
 $notification->save();


 return redirect('/contact')->with('success',auth()->user()->name.' Message Received, We will get back to you at '.auth()->user()->email);
  }
  else{
    $message=new Message;
    $message->name=$request->input('name');
    $message->email=$request->input('email');
    $message->subject=$request->input('subject');
    $message->message=$request->input('message');
    $message->save();

    $notification=new Notification;
    $notification->type='message';
    $notification->notifier_name=$message->name;
    $notification->notifier_id=$message->id;
    $notification->body="Send You A Message";
    $notification->save();



    return redirect('/contact')->with('success',$request->input('name').' Message Received, We will get back to you at '.$request->input('email'));

  }
}

//post a review
public function reviewpost(Request $request){
 $review=new Review;
 $review->name=$request->input('name');
 $review->review=$request->input('review');
 $review->save();

 return redirect('/')->with('success','Review Posted Successfully, Thankyou for your review');

}
// return blog details
public function eventdetails($id){
  $title='Blog -> Event Details';
  $images=Image::where('event_id',$id)->get();
   $populars=Event::take(10)->get();
   $comments=Comment::where('commentable_type','event')->where('commentable_id',$id)->get();
  $event=event::find($id);
  return view('pages.eventdetails')->with('title',$title)->with('event',$event)->with('comments',$comments)->with('populars',$populars)->with('images',$images);
}

//reservation
public function reserve(Request $request){

  $reservation=new Reservation;
  $reservation->name=$request->input('name');
  $reservation->email=$request->input('email');
  $reservation->phone=$request->input('phone');
  $reservation->event=$request->input('event');
  $reservation->date=$request->input('date');
  $reservation->details=$request->input('details');
  $reservation->save();


  $notification=new Notification;
  $notification->type='reservation';
  $notification->notifier_name=$reservation->name;
  $notification->notifier_id=$reservation->id;
  $notification->body="You Received A New Reservation";
  $notification->save();
  return redirect('/')->with('success','reservation placed successfully');
}

}

