<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Service;
use Auth;

class ServiceController extends Controller
{
    public function view(){
        $data['alldata'] = Service::all();
        return view('back-end.service.view-service',$data);
    }

    public function add(){
        return view('back-end.service.add-service');
    }

    public function store(Request $request){
       $data = new Service();
       $data->created_by = Auth::user()->name;
       $data->updated_by = Auth::user()->name;
       $data->Heading = $request->Heading;
       $data->name = $request->name;
       $data->description = $request->description;
       $data->save();

       return redirect()->route('service.view');
    }

    public function edit($id){
         $editdata = Service::find($id);
         return view('back-end.service.edit-service',compact('editdata'));
    }

    public function update(Request $request,$id){
        $data = Service::find($id);
        $data->created_by = Auth::user()->name;
        $data->updated_by = Auth::user()->name;
        $data->Heading = $request->Heading;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();
        return redirect()->route('service.view');
     }

     public function delete($id){
        $data = Service::find($id);
        $data->delete();
        return redirect()->route('service.view');
     }
}
