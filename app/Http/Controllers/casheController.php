<?php

namespace App\Http\Controllers;

use App\Jobs\messageJob;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class casheController extends Controller
{
    //
    public function index(){
        $students=User::where('user_type','student')->get();
        foreach($students as $student){
       messageJob::dispatch($student->email);
        }
        return "The eamil has been sent successfully";
    }
}
