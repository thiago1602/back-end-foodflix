<?php

use App\Http\Controllers\DiaristaController;
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

Route::get('/', [DiaristaController::class, 'index'])->name('diaristas.index');
Route::get('/foodflix/create', [DiaristaController::class, 'create'])->name('diaristas.create');
Route::post('/foodflix', [DiaristaController::class, 'store'])->name('diaristas.store');
Route::get('/foodflix/{id}/edit', [DiaristaController::class, 'edit'])->name('diaristas.edit');
Route::put('/foodflix/{id}', [DiaristaController::class, 'update'])->name('diaristas.update');
Route::get('/foodflix/{id}', [DiaristaController::class, 'destroy'])->name('diaristas.destroy');

