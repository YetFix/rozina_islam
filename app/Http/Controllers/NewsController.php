<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $news = News::all();
        
        return view('backend.News.index',compact('news'));
    }


    function create(){
        $categories=Category::all();
        return view('backend.News.create',compact('categories'));
    }
    function store(Request $request){
        
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'type'=>'required',
            'category'=>'required',
        ]);
        
        News::create([
            'title'=>$request->name,
            'desc'=>$request->desc,
            'type'=>$request->type,
            'category_id'=>$request->category
        ]);
        Toastr::success('Added New news Succesfully ', 'News', ["positionClass" => "toast-top-right"]);
        return redirect('/allnews');
    }
    function edit(Request $request,$id){
        $news = News::find($id);
        $categories=Category::all();
        return view('backend.News.edit',compact('news','categories'));
    }
    function update(Request $request,$id){
        
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'desc'=>'required',
            'category' => 'required'
        ]);
        
        News::where('id',$id)->update([
            'title'=>$request->name,
            'desc'=>$request->desc,
            'type'=>$request->type,
            'category_id'=>$request->category,
        ]);
                   
        Toastr::success('News Updated Succesfully ', 'News', ["positionClass" => "toast-top-right"]);

        return redirect('/allnews');
       
    }
    function delete(Request $request,$id){
        $news= News::find($id);
    
        $news->delete();
        Toastr::success('News deleted Succesfully ', 'News', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
