<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\MainController as MainController;

// Rotta per la home
Route::get('/', [MainController::class, 'index'])->name('home');

// Rotta per la pagina col form create
Route::get('/create', [MainController::class, 'create'])->name('create');


Route::post('/store', [MainController::class, 'store'])->name('store');


// Rotta per la show che mostra informazioni della singola card cliccata
Route::get('/show/{id}', [MainController::class, 'show'])->name('show');
