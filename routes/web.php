<?php

use App\Http\Controllers\RuneController;
use App\Http\Controllers\RunewordController;
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

Route::get('/', [RunewordController::class, 'calculator'])->name('runeword.calculator');
Route::get('/runewords', [RunewordController::class, 'index'])->name('runeword.index');
Route::get('/runes', [RuneController::class, 'index'])->name('rune.index');

