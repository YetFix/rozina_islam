<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class AwardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $awards = Award::get();
        return view('backend.Award.index',compact('awards'));
    }


    function create(){
        return view('backend.Award.create');
    }
    function store(Request $request){
        
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'award' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if ($image = $request->file('award')) {
            $destinationPath = 'awardimg/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            
            Award::create([
                'title'=>$request->name,
                'desc'=>$request->desc,
                'image'=>$profileImage,
            ]);

        }
        Toastr::success('Added New award Succesfully ', 'award', ["positionClass" => "toast-top-right"]);
        return redirect('/awards');
    }
    function edit(Request $request,$id){
        $award = Award::find($id);
        return view('backend.Award.edit',compact('award'));
    }
    function update(Request $request,$id){
        
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'award' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
            if( $image = $request->file('award')){

                $award= Award::find($id);
       
                if(File::exists(public_path('awardimg').'/'.$award->image)) {
                    unlink(public_path('awardimg').'/'.$award->image);
                }
                $image = $request->file('award');
                $destinationPath = 'awardimg/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                
                Award::where('id',$id)->update([
                    'title'=>$request->name,
                    'desc'=>$request->desc,
                    'image'=>$profileImage,
                ]);
            }else{
                $award = Award::find($id);
                Award::where('id',$id)->update([
                    'title'=>$request->name,
                    'desc'=>$request->desc,
                    'image'=>$award->image,
                ]);
            }
        
            Toastr::success('Award Updated Succesfully ', 'award', ["positionClass" => "toast-top-right"]);

        return redirect('/awards');
       
    }
    function delete(Request $request,$id){
        $award= Award::find($id);
       
        if(File::exists(public_path('awardimg').'/'.$award->image)) {
            unlink(public_path('awardimg').'/'.$award->image);
        }
        $award->delete();
        Toastr::success('Award deleted Succesfully ', 'award', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
