<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class casheController extends Controller
{
    //
    public function index(){
        Cache::put('month',' jan paid',120);
        $value =Cache::get('month');
        Cache::forget('month');
       $value2= Cache::get('abc',' this one is undefined');
        return "something".$value. $value2;
    }
}
