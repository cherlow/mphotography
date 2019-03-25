<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Feed;

class CategoriesController extends Controller
{
    // prevent access when user is not logged in
    public function __construct()
    {
        $this->middleware('auth');
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
            $categories=Category::all();
            return view('admin.categories')->with('categories',$categories); 
        }
        
    }


    // function for storing a new  category
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'desc'=>'required',
  
        ]);
        $category=new Category();
      $category->name=$request->input('name');
      $category->description=$request->input('desc');
      $category->save();

      return redirect('/categories');
    }

    // function to change the status of a category
    public function status($id){

        if(auth()->user()->role != 'admin'){
            return view('pages.index');
    }
        else{
           $category=Category::find($id);
           if($category->status=='pending'){
            $category->status='active';
            $category->save();
           }
            else{
                $category->status='pending';
                $category->save(); 
            }
        }
        return redirect('/categories');
    }

    //return the edit category view
    public function edit($id){
        if(auth()->user()->role!='admin'){
            return view('pages.index');
        }
        else{
          $category=Category::find($id);
          if(!$category){
              return "404 error";
          }
          else{
              return view('admin.categoriesedit')->with('category',$category);
          }
        }
    }

    // update a category
    public function update(Request $request, $id)
    {
      $category=Category::find($id);
      if(!$category){
          return "404 error";
      }
      else{
        $this->validate($request,[
            'name'=>'required',
            'desc'=>'required',
            'status'=>'required',
  
        ]);
        $category->name=$request->input('name');
        $category->status=$request->input('status');
        $category->description=$request->input('desc');
        $category->save();

        return redirect('/categories');
      }
    }

    // destroy an element from the table
    public function destroy($id){
      $category=Category::find($id);
      $images=Feed::all();
      $dels= $images->where('category',$category->name);
      if($category->delete()){
          foreach($dels as $del){
              $del->delete();
          }
        return redirect('/categories');
      }
      else{
          return "404 error";
      }
    }
}
