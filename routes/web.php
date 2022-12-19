<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'index']);
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ]) ->group(function () {
    /*rediect role route*/
    Route::get('/dashboard',[HomeController::class,'redirect'])->name('dashboard');
    /*admin dashboard*/
    Route::get('/doctor/manage',[DoctorController::class,'index'])->name('index');
    Route::get('/doctor/create',[DoctorController::class,'create'])->name('create');
    Route::post('/doctor/create',[DoctorController::class,'store'])->name('store');
    Route::delete('/doctor/delete/{id}',[DoctorController::class,'destroy'])->name('destroy');



});
