<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\CuadraticaController;

Route::get('/cuadratica', [CuadraticaController::class, 'index']);
Route::post('/resolver-cuadratica', [CuadraticaController::class, 'resolverCuadratica']);

 Route::get('/saludo',[ProductController::class,'saludo']);
 Route::get('/sumar/{num1}/{num2}',[OperacionesController::class,'suma']);
 Route::get('/Resta/{num1}/{num2}',[OperacionesController::class,'Resta']);
 Route::get('/multiplicacion/{num1}/{num2}',[OperacionesController::class,'multiplicacion']);
 Route::get('/division/{num1}/{num2}',[OperacionesController::class,'division']);
 Route::get('/product/create',[ProductController::class,'create']);
 Route::post('/product/store',[ProductController::class,'store'])->name('product.store');

