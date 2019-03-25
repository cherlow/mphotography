<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
// list all messages
    public function showmessages(){

        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
        else{
             $messages=message::orderBy('id','desc')->paginate(10);
            return view('admin.showmessages')->with('messages',$messages);
        }

    }

    // return messages
    public function readmail($id){

        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
        else{
             $message=Message::find($id);
            return view('admin.readmail')->with('message',$message);
        }

    }
}
