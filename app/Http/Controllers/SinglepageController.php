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
class SinglepageController extends Controller
{
    public function index(){
        $data['alldata']=Header::first();
        $data['aboutdata']=About::first();
        $data['footeredata']=Footer::first();
        return view('front-end.singalpage.singalpage',$data);
    }
}
