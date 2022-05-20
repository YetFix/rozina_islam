<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $admins = User::get();
        return view('backend.Admin.index',compact('admins'));
    }


    function create(){
        return view('backend.Admin.create');
    }
    function store(Request $request){
        $request->validate([
            'name'=>'required ',
            'email'=>'required | unique:users|email',
            'password'=>'required |min:8',
        ]);


        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        Toastr::success('Added New Admin Succesfully ', 'Admin', ["positionClass" => "toast-top-right"]);
        return redirect('/admins');
    }
    function edit(Request $request,$id){
        $admin = User::find($id);
        return view('backend.Admin.edit',compact('admin'));
    }
    function update(Request $request,$id){
      
        $admin = User::find($id);
        $request->validate([
            'name'=>'required ',
            'email'=>'required | email',
        ]);
        if($request->password!=null){
            User::where('id',$id)
            ->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password)
            ]);
        }else{
            User::where('id',$id)
            ->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$admin->password
            ]);
        }
       
        Toastr::success('Admin updated Succesfully ', 'Admin', ["positionClass" => "toast-top-right"]);
        return redirect('/admins');
    }
    function delete(Request $request,$id){
        User::find($id)->delete();
        Toastr::success('Admin deleted Succesfully ', 'Admin', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


}
