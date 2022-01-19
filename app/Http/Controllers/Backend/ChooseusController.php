<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Chooseus;

class ChooseusController extends Controller
{
    public function view(){
        $data['countdata']= Chooseus::count();
        $data['alldata']= Chooseus::all();
        return view('back-end.choose.view-choose',$data);
    }

    public function add(){
        return view('back-end.choose.add-choose');
    }

    public function store(Request $request){
    
        $data = new Chooseus();
        $data->created_by = Auth::user()->name;
        $data->updated_by = Auth::user()->name;
        $data->heading = $request->heading;
        if($request->file('image')){
            $file=$request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/choose_image'),$filename);
            $data['image'] =$filename;
        }
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return redirect()->route('chooseus.view')->with('success','save info successfully');
       
    }

    public function edit($id){
        $editData =Chooseus::find($id);
        return view('back-end.choose.edit-choose',compact('editData'));
    }

    public function update(Request $request,$id){
        $data =Chooseus::find($id);
        $data->created_by = Auth::user()->name;
        $data->updated_by = Auth::user()->name;
        $data->heading = $request->heading;
        if($request->file('image')){
            $file=$request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/choose_image'),$filename);
            $data['image'] =$filename;
        }
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return redirect()->route('chooseus.view')->with('success','update info successfully');
    }

    public function delete($id){
        $data = Chooseus::find($id);
        @unlink(asset('upload/choose_image/'.$data->image));
        $data->delete();
        return redirect()->route('chooseus.view')->with('suceess','Delete Data successfully');
    }
}
