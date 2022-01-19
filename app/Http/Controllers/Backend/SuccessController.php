<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Success;

class SuccessController extends Controller
{
    public function view(){
        $data['countable']= Success::count();
        $data['alldata']= Success::all();
        return view('back-end.success.view-success',$data);
    }

    public function add(){
        return view('back-end.success.add-success');
    }

    public function store(Request $request){
    
        $data = new Success();
        $data->created_by = Auth::user()->name;
        $data->updated_by = Auth::user()->name;
        $data->name = $request->name;
        $data->number = $request->number;
        $data->save();

        return redirect()->route('success.view')->with('success','save info successfully');
       
    }

    public function edit($id){
        $editData =Success::find($id);
        return view('back-end.success.edit-choose',compact('editData'));
    }

    public function update(Request $request,$id){
        $data =Success::find($id);
        $data->created_by = Auth::user()->name;
        $data->updated_by = Auth::user()->name;
        $data->name = $request->name;
        $data->number = $request->number;
        $data->save();

        return redirect()->route('success.view')->with('success','update info successfully');
    }

    public function delete($id){
        $data = Success::find($id);
        $data->delete();
        return redirect()->route('success.view')->with('suceess','Delete Data successfully');
    }
}
