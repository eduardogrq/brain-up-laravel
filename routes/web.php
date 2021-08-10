<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
})->name('index');

Route::get('/recursos/{grado}/{materia}', [BookController::class, 'book'])->name('recursos.materia');

Route::get('/maestros/recursos', [BookController::class, 'maestro'])->name('recursos.maestro');

Route::get('/videos/{grado}', [BookController::class, 'video'])->name('video.index');

Route::get('/ajustes-razonables', [BookController::class, 'ajustes'])->name('ajustes');
