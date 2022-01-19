<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Header;
class HeaderController extends Controller
{
    public function view(){
        $data['alldata'] = Header::all();
        return view('back-end.header.view-header',$data);
    }

    public function add(){
        return view('back-end.header.add-header');
    }

    public function store(Request $request){
      
        $data = new Header();
        $data->created_by = Auth::user()->name;
        $data->updated_by =Auth::user()->name;
        $data->title = $request->title;
        $data->header = $request->header;
        $data->paragraph = $request->paragraph;
        $data->save();

        return redirect()->route('header.view');

    }

    public function edit($id){

        $editdata = Header::find($id);

        return view('back-end.header.edit-header',[
            'editdata' =>$editdata
        ]);
     
    }

    public function update(Request $request,$id){
        $data = Header::find($id);
        $data->title = $request->title;
        $data->header = $request->header;
        $data->paragraph = $request->paragraph;
        $data->save();

        return redirect()->route('header.view');
    }


    public function delete($id){
        $data = Header::find($id);
        $data->delete();
        return redirect()->route('header.view');

    }
  
}
