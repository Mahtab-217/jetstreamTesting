<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class casheController extends Controller
{
    //
    public function index(){
       Mail::to("mahtabnasiri1289@gamil.com")->send(new WelcomeMail());
        return "The eamil has been sent successfully";
    }
}
