<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Model\logo;

class LogoController extends Controller
{
    public function view(){
        $data['counting']= logo::count();
        $data['alldata']= logo::all();
        return view('back-end.logo.view-logo',$data);
    }

    public function add(){
        
       return view('back-end.logo.add-logo');
    }

    public function store(Request $request){
    
        $data = new logo();
        $data->create_by = Auth::user()->name;
        $data->update_by = Auth::user()->name;
        if($request->file('image')){
            $file=$request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/logo_image'),$filename);
            $data['image'] =$filename;
        }
        $data->save();

        return redirect()->route('logo.view')->with('success','save info successfully');
       
    }

    public function edit($id){
        $editData =logo::find($id);
        return view('back-end.logo.edit-logo',compact('editData'));
    }

    public function update(Request $request,$id){
        $data =logo::find($id);
        $data->create_by = Auth::user()->name;
        $data->update_by = Auth::user()->name;
        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('upload/logo_image/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/logo_image'),$filename);
            $data['image'] =$filename;
        }
        $data->save();

        return redirect()->route('logo.view')->with('success','update info successfully');


    }

    public function delete($id){
        $logo = logo::find($id);
        unlink(public_path('upload/logo_image/'.$logo->image));
        $logo->delete();
        return redirect()->route('logo.view')->with('suceess','Delete Data successfully');
    }
}
