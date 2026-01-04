<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Models\User;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function index(){
        $students= students::all();
        return view('Studetn.home')->with('students', $students);
    }
}
