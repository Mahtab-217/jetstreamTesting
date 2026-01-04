<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
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
Route::prefix('student')->controller(StudentsController::class)->group(function(){
    Route::get('/','index');
});
