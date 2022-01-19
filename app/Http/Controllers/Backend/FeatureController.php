<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\feature;


class FeatureController extends Controller
{
    public function view(){
        $data['alldata'] = feature::all();
        return view('back-end.feature.view-feature',$data);
    }

    public function add(){
        return view('back-end.feature.add-feature');
    }

    public function store(Request $request){
       $data = new feature();
       $data->created_by = Auth::user()->name;
       $data->updated_by = Auth::user()->name;
       $data->title = $request->title;
       $data->description = $request->description;
       if($request->file('image')){
        $file=$request->file('image');
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/feature_image'),$filename);
        $data['image'] =$filename;
         }
       $data->save();

       return redirect()->route('feature.view');
    }

    public function edit($id){
         $editdata = feature::find($id);
         return view('back-end.feature.edit-feature',compact('editdata'));
    }

    public function update(Request $request,$id){
        $data = feature::find($id);
        $data->created_by = Auth::user()->name;
        $data->updated_by = Auth::user()->name;
        $data->title = $request->title;
        $data->description = $request->description;
        if($request->file('image')){
                $file=$request->file('image');
                @unlink(public_path('upload/feature_image/'.$data->image));
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/feature_image'),$filename);
                $data['image'] =$filename;
        }
       $data->save();

       return redirect()->route('feature.view');
     }

     public function delete($id){
        $data = feature::find($id);
        unlink(public_path('upload/feature_image/'.$data->image));
        $data->delete();
        return redirect()->route('feature.view');
     }
}
