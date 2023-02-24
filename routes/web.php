<?php

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
Route::get('/informacion', function () {
    return view('datos');
});
Route::get('/inscripcion', function () {
    return view('inscripcion');
});
Route::get('/adicion', function () {
    return view('datadicion');
});
Route::get('/confirmacion', function () {
    return view('confirmacion');
});
