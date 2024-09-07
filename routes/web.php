<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\informationController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\companyController;
use App\Http\Controllers\studentController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about',[AboutController::class,'index']);
Route::get('course/{name}',[CourseController::class,'getCourse']);
Route::get('info',[informationController::class,'index']);

Route::get('/movie',[MovieController::class,'index'])->name('movie');
Route::get('/faculty',[FacultyController::class,'index'])->name('faculty');

<<<<<<< HEAD
Route::get('/company',[companyController::class,'index'])->name('comp');
Route::get('/student',[studentController::class,'index'])->name('shwstd');
Route::post('/student/insert',[studentController::class,'insert'])->name('addstd');
=======
Route::get('/hee',[companyController::class,'index'])->name('hee'.);
>>>>>>> 210d22b7d447e29de316ad3a4ac2750664d36ae7
