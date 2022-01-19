<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Header;
use App\Model\About;
use App\Model\Chooseus;
use App\Model\Success;
use App\Model\Service;
use App\Model\Clients;
use App\Model\feature;
use App\Model\Footer;
class HomeControllertwo extends Controller
{
    public function index(){
         $data['alldata']=Header::first();
         $data['aboutdata']=About::first();
         $data['choosedata']=Chooseus::orderBy('id','desc')->get();
         $data['successdata']=Success::get();
         $data['servicedata']=Service::get();
         $data['clientdata']=Clients::get();
         $data['featuredata']=feature::get();
         $data['footeredata']=Footer::first();
         return view('front-end.home.home',$data);
    }
}
