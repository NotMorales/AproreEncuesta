<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NormaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('encuesta');
})->name('index');

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/gracias', function () {
    return view('enviar');
})->name('gracias');

Route::post('/formulario/enviar', [NormaController::class, 'enviar'])->name('enviar');
