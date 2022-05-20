<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $certificates = Certificate::get();
        return view('backend.Certificate.index',compact('certificates'));
    }


    function create(){
        return view('backend.Certificate.create');
    }
    function store(Request $request){
        
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'certificate' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        if ($image = $request->file('certificate')) {
            $destinationPath = 'certificateimg/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            
            Certificate::create([
                'title'=>$request->name,
                'desc'=>$request->desc,
                'image'=>$profileImage,
            ]);

        }
        Toastr::success('Added New Certificate Succesfully ', 'Certificate', ["positionClass" => "toast-top-right"]);
        return redirect('/certificates');
    }
    function edit(Request $request,$id){
        $certificate = Certificate::find($id);
        return view('backend.Certificate.edit',compact('certificate'));
    }
    function update(Request $request,$id){
        
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'certificate' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
            if( $image = $request->file('certificate')){

                $Certificate= Certificate::find($id);
       
                if(File::exists(public_path('certificateimg').'/'.$Certificate->image)) {
                    unlink(public_path('certificateimg').'/'.$Certificate->image);
                }
                $image = $request->file('certificate');
                $destinationPath = 'certificateimg/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                
                Certificate::where('id',$id)->update([
                    'title'=>$request->name,
                    'desc'=>$request->desc,
                    'image'=>$profileImage,
                ]);
            }else{
                $Certificate = Certificate::find($id);
                Certificate::where('id',$id)->update([
                    'title'=>$request->name,
                    'desc'=>$request->desc,
                    'image'=>$Certificate->image,
                ]);
            }
        
            Toastr::success('Certificate Updated Succesfully ', 'Certificate', ["positionClass" => "toast-top-right"]);

        return redirect('/certificates');
       
    }
    function delete(Request $request,$id){
        $Certificate= Certificate::find($id);
       
        if(File::exists(public_path('certificateimg').'/'.$Certificate->image)) {
            unlink(public_path('certificateimg').'/'.$Certificate->image);
        }
        $Certificate->delete();
        Toastr::success('Certificate deleted Succesfully ', 'Certificate', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
