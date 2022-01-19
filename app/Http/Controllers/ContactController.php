<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Contact;
use Mail;
use App\Model\Header;
use App\Model\Footer;
use App\Model\Address;
class ContactController extends Controller
{
    public function index(){
       
        return view('front-end.contact.contact',[
            'alldata'=>Header::first(),
            'addr'=>Address::first(),
            'footeredata'=>Footer::first()
        ]);
    }

    public function store(Request $request){
    
        $data = new Contact();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->save();

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::send('front-end.contact.gmailtemp',$data,function($message) use($data){
            $message->from('masudurcy@gmail.com','Suhaz Company');
            $message->to($data['email']);
            $message->subject('Thank you for contact us');
        });

        return redirect()->route('contact');
       
    }

}
