<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Models\User;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function index($id){
        $students= students::findorFail($id);
        return $students;
    }
}
