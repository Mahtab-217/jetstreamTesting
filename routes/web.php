<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use App\Http\Middleware\StudentMiddleWare;
use App\Http\Middleware\TeacherMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::prefix('user')->controller(StudentsController::class,)->middleware('teacher')->group(function(){
Route::get('/',[StudentsController::class, 'index']);
});
Route::prefix('/teacher')->controller(TeachersController::class)->group(function(){
Route::get('/','index');
Route::get('/{id}','show');
});
Route::prefix('student')->controller(StudentsController::class)->middleware('auth')->group(function(){
    Route::get('/','index');
    Route::get('/edit/{id}','edit');
    Route::put('/update/{id}','update');
    Route::delete('/delete/{id}','delete');
});
Route::view('sample','Sample');
Route::view('sample2','sample2');
Route::get('/post',[ PostController::class], 'addData');
Route::get('sample3',[SampleController::class,'index']);
