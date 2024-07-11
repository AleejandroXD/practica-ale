<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NuevoController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/ruta-nueva', function () {
    return view('ruta-nueva');
});

Route::get('/rutaControlador', [NuevoController::class, 'index']);
