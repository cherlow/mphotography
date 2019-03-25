<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Image;

class EventsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    // deleting particular images of an event
    public function images($id){
        $image=Image::find($id);
        $return_id=$image->event_id;
        if($image->delete()){
            return redirect('/events/'.$return_id.'/edit');

        }

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
        else{
            $images=Image::all();
            $events=Event::all();
            return view('admin.events')->with('events',$events)->with('images',$images); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
        else{
            return view('admin.eventscreate');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validation goes here

        //validation ends here
    
        // insertion goes here of event
        $event=new Event;
              $event->title =$request->input('title');
              $event->description =$request->input('body');
              $event->location = $request->input('location');
              $event->save();
        //event insertion ends her
 $event=Event::where('title',$request->input('title'))->first();
 
        // get the inserted event id


        //store the images to the database
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

                 $image=new Image;
                 $image->name =$fileNameToStore;
                 $image->event_id=$event->id;
                 $image->save();
              
            }
         }
         return redirect('/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
        else{
           $chk=Event::find($id);
           if(!$chk){
            return view("pages.404error");
           }
           else{
              $images=Image::where('event_id',$id)->get();
               $event=Event::find($id);
           return view('admin.eventsedit')->with('event',$event)->with('images',$images);
           }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        // validation goes here

        //validation ends here
    
        // insertion goes here of event
        $event=Event::find($id);
              $event->title =$request->input('title');
              $event->description =$request->input('body');
              $event->location = $request->input('location');
              $event->save();
        //event insertion ends her
 $event=Event::where('title',$request->input('title'))->first();
 
        // get the inserted event id


        //store the images to the database
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

                 $image=new Image;
                 $image->name =$fileNameToStore;
                 $image->event_id=$id;
                 $image->save();
              
            }
         }
         return redirect('/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=Event::find($id);
        if($event->delete()){
            

        }

        $event_images=Image::where('event_id',$id)->get();
        foreach($event_images as $event_image){

                $event_image->delete();
        }
        return redirect('/events');
    
    }
}
