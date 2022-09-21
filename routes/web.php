<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index']); 
Route::get('/proximamente',[HomeController::class,'proximamente']);
Route::post('/sendMailProximamente',[HomeController::class,'sendMailProximamente']);
Route::get('/mantenimiento',[HomeController::class,'mantenimiento']);

Route::get('/inicio',[HomeController::class,'inicio']);
Route::get('/nosotros',[HomeController::class,'nosotros']);
Route::get('/contacto',[HomeController::class,'contacto']);
Route::get('/login',[HomeController::class,'login']); 
Route::get('/create',[HomeController::class,'create']);
Route::get('/leer1',[HomeController::class,'leer1']);
Route::get('/leer2',[HomeController::class,'leer2']);
Route::get('/ticket',[HomeController::class,'ticket']);

Route::get('/blog',[BlogController::class,'blog']);
Route::get('/blogTemp',[BlogController::class,'blogTemp']);
Route::get('/blog/{id}',[BlogController::class,'show']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
