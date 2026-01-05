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
    public function edit($id){
    $student=students::findOrFail($id);
    // return $student;
 return view('Studetn.edit')->with('student',$student);
    }
    public function update(Request $request, $id){
      $student=  students::findOrFail($id);
      $student->name=$request->name;
      $student->lastName=$request->lastName;
      $student->update();
      return redirect('student');
    }
}
