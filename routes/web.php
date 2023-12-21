<?php

use App\Http\Controllers\view\BookingController;
use App\Http\Controllers\view\ContactController;
use App\Http\Controllers\view\DoctorController;
use App\Http\Controllers\view\MajorController;
use App\Http\Controllers\view\RateController;
use App\Http\Controllers\view\UserController;
use App\Models\Major;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/doctor',[DoctorController::class,'index'])->name('doctor.index');
Route::delete('/doctor/{id}',[DoctorController::class,'destroy'])->name('doctor.destroy');
Route::get('/doctor/{id}/edit',[DoctorController::class,'edit'])->name('doctor.edit');
Route::put('/doctor/{id}',[DoctorController::class,'update'])->name('doctor.update');
Route::get('/doctor/create',[DoctorController::class,'create'])->name('doctor.create');
Route::post('/doctor/store',[DoctorController::class,'store'])->name('doctor.store');
Route::get('/doctor/{id}',[DoctorController::class,'show'])->name('doctor.show');

Route::get('/major',[MajorController::class,'index'])->name('major.index');
Route::delete('/major/{id}',[MajorController::class,'destroy'])->name('major.destroy');
Route::get('/major/{id}/edit',[MajorController::class,'edit'])->name('major.edit');
Route::put('/major/{id}',[MajorController::class,'update'])->name('major.update');
Route::get('/major/create',[MajorController::class,'create'])->name('major.create');
Route::post('/major/store',[MajorController::class,'store'])->name('major.store');

Route::get('/booking',[BookingController::class,'index'])->name('booking.index');
Route::delete('/booking/{id}',[BookingController::class,'destroy'])->name('booking.destroy');

Route::get('/user',[UserController::class,'index'])->name('user.index');
Route::delete('/user/{id}',[UserController::class,'destroy'])->name('user.destroy');
Route::get('/user/create',[UserController::class,'create'])->name('user.create');
Route::post('/user/store',[UserController::class,'store'])->name('user.store');
Route::get('/user/{id}',[UserController::class,'show'])->name('user.show');

Route::get('/rate',[RateController::class,'index'])->name('rate.index');

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');

