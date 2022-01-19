<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Address;

class AddressController extends Controller
{
    public function view(){
        $data['alldata']=Address::all();
        return view('back-end.Address.view-address',$data);
    }

    public function add(){
        return view('back-end.Address.add-address');
    }

    public function store(Request $request){
    
        $data = new Address();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();

        return redirect()->route('address.view')->with('success','save info successfully');
       
    }

    public function edit($id){
        $editdata =Address::find($id);
        return view('back-end.Address.edit-Address',compact('editdata'));
    }

    public function update(Request $request,$id){
        $data =Address::find($id);
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();

        return redirect()->route('address.view')->with('success','save info successfully'); 


    }

    public function delete($id){
        $data = Address::find($id);
        $data->delete();
        return redirect()->route('address.view')->with('success','save info successfully'); 
    }
}
