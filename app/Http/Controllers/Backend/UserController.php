<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
     public function view(){
         $data['alldata']= User::all();
         return view('back-end.user.view-user',$data);
     }

     public function add(){
         
        return view('back-end.user.add-user');
     }

     public function store(Request $request){
         $this->validate($request,[
             'usertype'=> 'required',
             'name'=> 'required',
             'email'=> 'required|email|unique:users',
             'password'=> 'required|min:8',
         ]);
         $editData = new User();
         $editData->usertype = $request->usertype;
         $editData->name = $request->name;
         $editData->email = $request->email;
         $editData->password = bcrypt($request->password);
         $editData->save();

         return redirect()->route('user.view')->with('success','save info successfully');
        
     }

     public function edit($id){
         $editData = User::find($id);
         return view('back-end.user.edit-user',compact('editData'));
     }

     public function update(Request $request,$id){
        $editData =User::find($id);
        $editData->usertype = $request->usertype;
        $editData->name = $request->name;
        $editData->email = $request->email;
        $editData->password = bcrypt($request->password);
        $editData->save();

        return redirect()->route('user.view')->with('success','update info successfully');

     }

     public function delete($id){
         $deleteData = User::find($id);
         $deleteData->delete();
         return redirect()->route('user.view')->with('suceess','Delete Data successfully');
     }
}
