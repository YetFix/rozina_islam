<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $sliders = Slider::get();
        return view('backend.Slider.index',compact('sliders'));
    }


    function create(){
        return view('backend.Slider.create');
    }
    function store(Request $request){
        
        $request->validate([
            'name'=>'required',
            'slider' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if ($image = $request->file('slider')) {
            $destinationPath = 'slidersimg/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            
            Slider::create([
                'name'=>$request->name,
                'image'=>$profileImage,
            ]);

        }
        Toastr::success('Added New Slider Succesfully ', 'Slider', ["positionClass" => "toast-top-right"]);
        return redirect('/sliders');
    }
    function edit(Request $request,$id){
        $slider = Slider::find($id);
        return view('backend.SLider.edit',compact('slider'));
    }
    function update(Request $request,$id){
        
        $request->validate([
            'name'=>'required',
            'slider' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
            if( $image = $request->file('slider')){

                $slider= SLider::find($id);
       
                if(File::exists(public_path('slidersimg').'/'.$slider->image)) {
                    unlink(public_path('slidersimg').'/'.$slider->image);
                }
                $image = $request->file('slider');
                $destinationPath = 'slidersimg/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                
                Slider::where('id',$id)->update([
                    'name'=>$request->name,
                    'image'=>$profileImage,
                ]);
            }else{
                $slider = Slider::find($id);
                Slider::where('id',$id)->update([
                    'name'=>$request->name,
                    'image'=>$slider->image,
                ]);
            }
        
            Toastr::success('Slider Updated Succesfully ', 'Slider', ["positionClass" => "toast-top-right"]);

        return redirect('/sliders');
       
    }
    function delete(Request $request,$id){
        $slider= SLider::find($id);
       
        if(File::exists(public_path('slidersimg').'/'.$slider->image)) {
            unlink(public_path('slidersimg').'/'.$slider->image);
        }
        $slider->delete();
        Toastr::success('Slider deleted Succesfully ', 'Slider', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}