<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;
use App\Reservation;
use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        if(auth()->user()->role == 'admin'){
            $users=User::orderBy('created_at','desc')->get();
            $messages=Message::orderBy('created_at','desc')->get();
            $reservations=Reservation::orderBy('created_at','desc')->get();
            $posts=Post::orderBy('created_at','desc')->get();
            return view('home')->with('users',$users)->with('reservations',$reservations)->with('messages',$messages)->with('posts',$posts);
    }
        else{
            return view('pages.index');
        }
    }
}
