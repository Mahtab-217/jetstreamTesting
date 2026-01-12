<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    //
    public function index(){
     session()->flash("message","Hi there");
     return  session()->all();
    }
}

