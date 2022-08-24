<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index']);
Route::get('/proximamente',[HomeController::class,'proximamente']);
Route::post('/sendMailProximamente',[HomeController::class,'sendMailProximamente']);

Route::get('/inicio',[HomeController::class,'inicio']);
Route::get('/registro',[HomeController::class,'registro']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
