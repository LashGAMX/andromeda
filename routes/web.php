<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index']);
Route::get('/proximamente',[HomeController::class,'proximamente']);
Route::post('/sendMailProximamente',[HomeController::class,'sendMailProximamente']);

Route::get('/inicio',[HomeController::class,'inicio']);
Route::get('/nosotros',[HomeController::class,'nosotros']);
Route::get('/contacto',[HomeController::class,'contacto']);
Route::get('/login',[HomeController::class,'login']);
Route::get('/create',[HomeController::class,'create']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
