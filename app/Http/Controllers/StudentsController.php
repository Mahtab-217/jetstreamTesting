<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StudentsController extends Controller
{
    //
    public function index(){
        $students= students::all();
        return view('Studetn.home')->with('students', $students);
    }
    public function edit($id){
    $student=students::findOrFail($id);
    Gate::authorize('edit-student',$student);
    // return $student;
 return view('Studetn.edit')->with('student',$student);
    }
    public function update(Request $request, $id){
      $student=  students::findOrFail($id);
      Gate::authorize('edit-student',$student);
      $student->name=$request->name;
      $student->lastName=$request->lastName;
      $student->update();
      return redirect('student');
    }
    public function delete($id){
      $student=students::findOrFail($id);
      Gate::authorize('delete',$student);
      $student->delete();
      return redirect('/student');
    }
}
