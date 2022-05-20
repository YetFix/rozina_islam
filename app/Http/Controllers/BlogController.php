<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $blogs = Blog::all();
        
        return view('backend.Blog.index',compact('blogs'));
    }


    function create(){
        $categories=Category::all();
        return view('backend.Blog.create',compact('categories'));
    }
    function store(Request $request){
        
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'type'=>'required',
            'category'=>'required',
            'blog' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if ($image = $request->file('blog')) {
            $destinationPath = 'blogimg/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            
            Blog::create([
                'title'=>$request->name,
                'desc'=>$request->desc,
                'type'=>$request->type,
                'category_id'=>$request->category,
                'image'=>$profileImage,
            ]);

        }
       
       
        Toastr::success('Added New Blog Succesfully ', 'Blog', ["positionClass" => "toast-top-right"]);
        return redirect('/blogs');
    }
    function edit(Request $request,$id){
        $blog = Blog::find($id);
        $categories=Category::all();
        return view('backend.Blog.edit',compact('blog','categories'));
    }
    function update(Request $request,$id){
        
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'desc'=>'required',
            'category' => 'required'
        ]);
        
        if( $image = $request->file('blog')){

            $blog= Blog::find($id);
   
            if(File::exists(public_path('blogimg').'/'.$blog->image)) {
                unlink(public_path('blogimg').'/'.$blog->image);
            }
            $image = $request->file('blog');
            $destinationPath = 'blogimg/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            
            Blog::where('id',$id)->update([
                'title'=>$request->name,
                'desc'=>$request->desc,
                'type'=>$request->type,
                'category_id'=>$request->category,
                'image'=>$profileImage,
            ]);
        }else{
            $blog = Blog::find($id);
            Blog::where('id',$id)->update([
                'title'=>$request->name,
                'desc'=>$request->desc,
                'type'=>$request->type,
                'category_id'=>$request->category,
                'image'=>$blog->image,
            ]);
        }
    
                   
        Toastr::success('Blog Updated Succesfully ', 'Blog', ["positionClass" => "toast-top-right"]);

        return redirect('/blogs');
       
    }
    function delete(Request $request,$id){
        $blog= Blog::find($id);
        if(File::exists(public_path('blogimg').'/'.$blog->image)) {
            unlink(public_path('blogimg').'/'.$blog->image);
        }
        $blog->delete();
        Toastr::success('Blog deleted Succesfully ', 'Blog', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
