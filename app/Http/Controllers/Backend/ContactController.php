<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Contact;

class ContactController extends Controller
{
     public function view(){
         $data['alldata']=Contact::all();
         return view('back-end.contact.view-contact',$data);
     }

     public function delete($id){
         $data = Contact::find($id);
         $data->delete();
         return redirect()->route('contact.view');
     }
}
