<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    //
    public function index(){
       $session= session("favorite_food","pizza");
     $session=session()->get("fovarite_food");
     return "This is the session".$session;
    }
}
