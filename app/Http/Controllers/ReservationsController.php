<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    // list reservations
    public function reservation(){
        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
    else{
        $reservations=Reservation::orderBy('created_at','desc')->get();
    return view('admin.listreservation')->with('reservations',$reservations);
    }
    }
    // show a single reservation
    public function showreservation($id){

        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
        else{
            $reservation=Reservation::find($id);
           return  view('admin.showreservation')->with('reservation',$reservation);
        }
       
    }
}
