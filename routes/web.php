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

// Rotta per l'invio dei dati
Route::post('/store', [MainController::class, 'store'])->name('store');

// Rotta per la show che mostra informazioni della singola card cliccata
Route::get('/show/{id}', [MainController::class, 'show'])->name('show');

// Rotta per pagina edit dove è possibile modificare dati
Route::get('/edit/{id}', [MainController::class, 'edit'])->name('edit');

// Rotta per update
Route::put('/update/{id}', [MainController::class, 'update'])->name('update');

// Rotta per eliminare elemento
Route::DELETE('/destroy/{id}', [MainController::class, 'destroy'])->name('destroy');
