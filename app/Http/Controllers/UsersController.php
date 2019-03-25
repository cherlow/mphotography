<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;



class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function users(){
        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
        else{
             $users=User::orderBy('created_at','desc')->paginate(5);
            return view('admin.usershow')->with('users',$users);
        }
    }
}
