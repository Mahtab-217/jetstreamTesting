<?php

namespace App\Http\Controllers;

use App\Models\teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function index(){
        $teacher=teachers::all();
        return $teacher;

    }
    public function show($id){
      $teachers=  teachers::where('id',$id)->get();
        return  $teachers;
    }
}
