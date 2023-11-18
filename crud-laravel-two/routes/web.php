<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartaController;
use FontLib\Table\Type\name;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('cartas/{id}/pdf', [CartaController::class, 'exportPdf'])->name('cartas.pdf');

Route::resource('cartas', CartaController::class);