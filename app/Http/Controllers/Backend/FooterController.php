<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Footer;

class FooterController extends Controller
{
    public function view(){
        $data['alldata'] = Footer::all();
        return view('back-end.footer.view-footer',$data);
    }

    public function add(){
        return view('back-end.footer.add-footer');
    }

    public function store(Request $request){
       $data = new Footer();
       $data->created_by = Auth::user()->name;
       $data->updated_by = Auth::user()->name;
       $data->heading = $request->heading;
       $data->facebook = $request->facebook;
       $data->twitter = $request->twitter;
       $data->rss = $request->rss;
       $data->email = $request->email;
       $data->instagram = $request->instagram;
       $data->save();

       return redirect()->route('footer.view');
    }

    public function edit($id){
         $editdata = Footer::find($id);
         return view('back-end.footer.edit-footer',compact('editdata'));
    }

    public function update(Request $request,$id){
       $data = Footer::find($id);
       $data->created_by = Auth::user()->name;
       $data->updated_by = Auth::user()->name;
       $data->heading = $request->heading;
       $data->facebook = $request->facebook;
       $data->twitter = $request->twitter;
       $data->rss = $request->rss;
       $data->email = $request->email;
       $data->instagram = $request->instagram;
       $data->save();
       return redirect()->route('footer.view');
     }

     public function delete($id){
        $data = Footer::find($id);
        $data->delete();
        return redirect()->route('footer.view');
     }
}
