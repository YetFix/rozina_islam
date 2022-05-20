<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('backend.categories.index',compact('categories'));
    }
    public function create(){
        return view('backend.categories.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required | unique:categories',
            'type'=>'required'
        ]);


        Category::create([
            'name'=>$request->name,
            'type'=>$request->type
        ]);
        Toastr::success('Added New Category Succesfully ', 'category', ["positionClass" => "toast-top-right"]);
        return redirect('/categories');
    }

    function edit(Request $request,$id){
        $category = Category::find($id);
        return view('backend.categories.edit',compact('category'));
    }
    function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'type'=>'required'
        ]);
        Category::where('id',$id)
        ->update([
            'name'=>$request->name,
            'type'=>$request->type
        ]);
        Toastr::success('Category updated Succesfully ', 'category', ["positionClass" => "toast-top-right"]);
        return redirect('/categories');
    }
    function delete(Request $request,$id){
        Category::find($id)->delete();
        Toastr::success('Category deleted Succesfully ', 'category', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
