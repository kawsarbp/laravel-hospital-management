<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index']);
/*user routes*/
Route::post('/user/store',[AppointmentController::class,'store'])->name('appointment.store');
Route::get('/user/appointment',[AppointmentController::class,'index'])->name('appointment.index');
Route::get('/user/destroy/{id}',[AppointmentController::class,'destroy'])->name('appointment.destroy');

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ]) ->group(function () {
    /*rediect role route*/
    Route::get('/dashboard',[HomeController::class,'redirect'])->name('dashboard');
    /*admin dashboard*/
    Route::get('/doctor/manage',[DoctorController::class,'index'])->name('index');
    Route::get('/doctor/create',[DoctorController::class,'create'])->name('create');
    Route::post('/doctor/create',[DoctorController::class,'store'])->name('store');
    Route::delete('/doctor/delete/{id}',[DoctorController::class,'destroy'])->name('destroy');
    /*appointment*/
    Route::get('/user/apppointments',[AppointmentController::class,'show'])->name('appointments.show');
    Route::get('/apppointment/approved/{id}',[AppointmentController::class,'approved'])->name('appointment.approved');
    Route::get('/apppointment/cancel/{id}',[AppointmentController::class,'cancel'])->name('appointment.cancel');

});
