<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
//show reviews
    public function showreviews(){
        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
    else{
        $reviews=Review::orderBy('id','desc')->paginate(10);
        return view('admin.reviews')->with('reviews',$reviews);
    }
    }

    //list reviews
    public function reviewstatus($id){
        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
    else{
        $review=Review::find($id);
        if($review){
            
            if($review->status=='pending'){
                $review->status='active';
                $review->save();
                return redirect('/reviews');
            }
            else{
                $review->status='pending';
                $review->save();
                return redirect('/reviews');
            }
        }
    }
}
public function createreview(Request $request){

   $review = new Review;
   $review->name=$request->name;
   $review->review=$request->review;
   $review->save();

   return redirect('/reviews')->with('success','review created successfully');

}
}
