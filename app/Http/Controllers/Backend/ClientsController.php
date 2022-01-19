<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Clients;

class ClientsController extends Controller
{
    public function view(){
        $data['alldata'] = Clients::all();
        return view('back-end.client.view-client',$data);
    }

    public function add(){
        return view('back-end.client.add-client');
    }

    public function store(Request $request){
       $data = new Clients();
       $data->created_by = Auth::user()->name;
       $data->updated_by = Auth::user()->name;
       $data->Heading = $request->Heading;
       if($request->file('image')){
        $file=$request->file('image');
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/clients_image'),$filename);
        $data['image'] =$filename;
         }
       $data->description = $request->description;
       $data->name = $request->name;
       $data->save();

       return redirect()->route('clients.view');
    }

    public function edit($id){
         $editdata = Clients::find($id);
         return view('back-end.client.edit-client',compact('editdata'));
    }

    public function update(Request $request,$id){
        $data = Clients::find($id);
        $data->created_by = Auth::user()->name;
        $data->updated_by = Auth::user()->name;
        $data->Heading = $request->Heading;
        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('upload/clients_image/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/clients_image'),$filename);
            $data['image'] =$filename;
         }
        $data->description = $request->description;
        $data->name = $request->name;
        $data->save();
        return redirect()->route('clients.view');
     }

     public function delete($id){
        $data = Clients::find($id);
        unlink(public_path('upload/clients_image/'.$data->image));
        $data->delete();
        return redirect()->route('clients.view');
     }
}
