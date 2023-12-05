<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfesorController;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'role:estudiante'], function () {
        Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');

        Route::get('/estudiantes/create', [EstudianteController::class, 'create'])->name('estudiantes.create');

        Route::post('/estudiantes', [EstudianteController::class, 'store'])->name('estudiantes.store');

        Route::get('/estudiantes/{profesor}', [EstudianteController::class, 'show'])->name('estudiantes.show');

        Route::get('/estudiantes/{profesor}/edit', [EstudianteController::class, 'edit'])->name('estudiantes.edit');

        Route::put('/estudiantes/{profesor}', [EstudianteController::class, 'update'])->name('estudiantes.update');

        Route::delete('/estudiantes/{profesor}', [EstudianteController::class, 'destroy'])->name('estudiantes.destroy');
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'role:profesor'], function () {
        Route::get('/profesores', [ProfesorController::class, 'index'])->name('profesores.index');

        Route::get('/profesores/create', [ProfesorController::class, 'create'])->name('profesores.create');

        Route::post('/profesores', [ProfesorController::class, 'store'])->name('profesores.store');

        Route::get('/profesores/{profesor}', [ProfesorController::class, 'show'])->name('profesores.show');

        Route::get('/profesores/{profesor}/edit', [ProfesorController::class, 'edit'])->name('profesores.edit');

        Route::put('/profesores/{profesor}', [ProfesorController::class, 'update'])->name('profesores.update');

        Route::delete('/profesores/{profesor}', [ProfesorController::class, 'destroy'])->name('profesores.destroy');
    });
});
