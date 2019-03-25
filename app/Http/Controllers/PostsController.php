<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
   public function publish($id){
       $post = Post::find($id);
       $post->status='posted';
       $post->save();
      
       return redirect('/posts')->with('success','post published successfully');
        

   }
     public function index()
    {
        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
        else{
            $posted=Post::where('status','posted')->orderBy('created_at','desc')->paginate(2);
            $drafts=Post::where('status','draft')->orderBy('created_at','desc')->get();
    
            return view('admin.posts')->with('posts',$posted)->with('drafts',$drafts);
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
           return view('admin.postcreate');
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

        $state=$request->input('toggler');

        if($state==1){
            $this->validate($request,[
                'title'=>'required',
                'body'=>'required',
                'cover'=>'image',
      
            ]);
    
            if($request->hasFile('cover')){
    
                
            
              // get filename with extension
              $fileNameWithExtension=$request->file('cover')->getClientOriginalName();
              // get just file name
              $fileName=pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
              // get just extension
              $extension=$request->file('cover')->getClientOriginalExtension();
              // file name to Store
              $fileNameToStore=$fileName.'_'.time().'.'.$extension;
              // upload the image
              $path=$request->file('cover')->storeAs('public/app_images',$fileNameToStore);
            
             
              $post=new Post;
              $post->name =$request->input('title');
              $post->body =$request->input('body');
              $post->cover_pic = $fileNameToStore;
              $post->save();
            
            }
        }
            else{
                $this->validate($request,[
                    'title'=>'required',
                    'body'=>'required',
                    'cover'=>'image',
          
                ]);
        
                if($request->hasFile('cover')){
        
                    
                
                  // get filename with extension
                  $fileNameWithExtension=$request->file('cover')->getClientOriginalName();
                  // get just file name
                  $fileName=pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
                  // get just extension
                  $extension=$request->file('cover')->getClientOriginalExtension();
                  // file name to Store
                  $fileNameToStore=$fileName.'_'.time().'.'.$extension;
                  // upload the image
                  $path=$request->file('cover')->storeAs('public/app_images',$fileNameToStore);
                
                 
                  $post=new Post;
                  $post->name =$request->input('title');
                  $post->body =$request->input('body');
                  $post->cover_pic = $fileNameToStore;
                  $post->status="draft";
                  $post->save();
                
                }
            }
        

        
    
    return redirect('/posts');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
        else{
           //
        }
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
           $chk=Post::find($id);
           if(!$chk){
            return view("pages.404error");
           }
           else{
               $post=Post::find($id);
           return view('admin.postsedit')->with('post',$post);
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
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'cover'=>'image',
  
        ]);

        if($request->hasFile('cover')){

            
        
          // get filename with extension
          $fileNameWithExtension=$request->file('cover')->getClientOriginalName();
          // get just file name
          $fileName=pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
          // get just extension
          $extension=$request->file('cover')->getClientOriginalExtension();
          // file name to Store
          $fileNameToStore=$fileName.'_'.time().'.'.$extension;
          // upload the image
          $path=$request->file('cover')->storeAs('public/app_images',$fileNameToStore);
        
         
          $post=Post::find($id);
          $post->name =$request->input('title');
          $post->body =$request->input('body');
          $post->cover_pic = $fileNameToStore;
          $post->save();
        
          return redirect('/posts');
        }
        else{
            $post=Post::find($id);
          $post->name =$request->input('title');
          $post->body =$request->input('body');
          
          $post->save();
          return redirect('/posts');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post=Post::find($id);
        if($post->delete()){
            return redirect("/posts");

        }
        return "Suckers forever";
    }
}
