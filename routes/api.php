<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/signup', [UserAuthController::class, 'signup']);
Route::post('/login', [UserAuthController::class, 'login']);


Route::group(['middleware' => "auth:sanctum"], function () {

    Route::get('/students', [StudentController::class, 'list']);
    Route::post('/add/students', [StudentController::class, 'addstudent']);
    Route::post('/add/students', [StudentController::class, 'addstudent']);
    Route::put('/update/students', [StudentController::class, 'updatastudent']);
    Route::delete('/delete/students/{id}', [StudentController::class, 'deletestudent']);
    Route::get('/search/students/{name}', [StudentController::class, 'searchstudent']);
});


Route::get('/login', [UserAuthController::class, 'login'])->name('login');
