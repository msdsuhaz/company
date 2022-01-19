<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\About;
use Auth;

class AboutController extends Controller
{
    public function view(){
        $data['alldata']= About::all();
        return view('back-end.about.view-about',$data);
    }

    public function add(){
        return view('back-end.about.add-about');
    }

    public function store(Request $request){
    
        $data = new About();
        $data->created_by = Auth::user()->name;
        $data->updated_by = Auth::user()->name;
        $data->header = $request->header;
        $data->description = $request->description;
        if($request->file('image')){
            $file=$request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/about_image'),$filename);
            $data['image'] =$filename;
        }
        $data->save();

        return redirect()->route('about.view')->with('success','save info successfully');
       
    }

    public function edit($id){
        $editData =About::find($id);
        return view('back-end.about.edit-about',compact('editData'));
    }

    public function update(Request $request,$id){
        $data =About::find($id);
        $data->header = $request->header;
        $data->description = $request->description;
        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('upload/about_image/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/about_image'),$filename);
            $data['image'] =$filename;
        }
        $data->save();

        return redirect()->route('about.view')->with('success','update info successfully');


    }

    public function delete($id){
        $data = About::find($id);
        @unlink(asset('upload/about_image/'.$data->image));
        $data->delete();
        return redirect()->route('about.view')->with('suceess','Delete Data successfully');
    }
}
