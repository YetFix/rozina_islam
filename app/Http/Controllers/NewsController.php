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
            'news' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if ($image = $request->file('news')) {
            $destinationPath = 'newsimg/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            
            News::create([
                'title'=>$request->name,
                'desc'=>$request->desc,
                'type'=>$request->type,
                'category_id'=>$request->category,
                'image'=>$profileImage,
            ]);

        }
       
       
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
        
        if( $image = $request->file('news')){

            $news= News::find($id);
   
            if(File::exists(public_path('newsimg').'/'.$news->image)) {
                unlink(public_path('newsimg').'/'.$news->image);
            }
            $image = $request->file('news');
            $destinationPath = 'newsimg/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            
            News::where('id',$id)->update([
                'title'=>$request->name,
                'desc'=>$request->desc,
                'type'=>$request->type,
                'category_id'=>$request->category,
                'image'=>$profileImage,
            ]);
        }else{
            $news = News::find($id);
            News::where('id',$id)->update([
                'title'=>$request->name,
                'desc'=>$request->desc,
                'type'=>$request->type,
                'category_id'=>$request->category,
                'image'=>$news->image,
            ]);
        }
    
                   
        Toastr::success('News Updated Succesfully ', 'News', ["positionClass" => "toast-top-right"]);

        return redirect('/allnews');
       
    }
    function delete(Request $request,$id){
        $news= News::find($id);
        if(File::exists(public_path('newsimg').'/'.$news->image)) {
            unlink(public_path('newsimg').'/'.$news->image);
        }
        $news->delete();
        Toastr::success('News deleted Succesfully ', 'News', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }



    public function newsByCat($id){
      $bbc=News::where('category_id',$id);
      $categories=Category::all();
      return view('frontend.cnews',compact('bbc','categories'));
    }
}
