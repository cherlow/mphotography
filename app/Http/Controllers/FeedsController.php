<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Feed;

class FeedsController extends Controller
{
    //access only on log in
    public function __construct()
    {
        $this->middleware('auth');
    }


    //return the index page of feeds

    public function index()
    {
        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
        else{
            $images=Feed::orderBy('created_at','desc')->get();
           return view('admin.feeds')->with('images',$images);
        }
        
    }

    // return image create view
    public function create()
    {
        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
        else{
           $categories=Category::all();
           return view('admin.feedscreate')->with('categories',$categories);
        }
        
    }

    // store images into the database
    public function store(Request $request)
    {
        if($request->hasFile('cover')){

            $files= $request->file('cover');
 
              foreach($files as $file){
               
                  // get filename with extension
                  $fileNameWithExtension=$file->getClientOriginalName();
                  // get just file name
                  $fileName=pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
                  // get just extension
                  $extension=$file->getClientOriginalExtension();
                  // file name to Store
                  $fileNameToStore=$fileName.'_'.time().'.'.$extension;
                  // upload the image
                  $path=$file->storeAs('public/event_images',$fileNameToStore);
 
                  $image=new Feed;
                  $image->name =$fileNameToStore;
                  $image->category=$request->input('category');
                  $image->tag=$request->input('tag');
                  $image->save();
               
             }
             return redirect('/feeds');
          }
    }

    public function delete($id){
        $image=Feed::find($id);
        if($image->delete()){
            return redirect("/feeds");

        }
        return "Suckers forever";

    }
}
