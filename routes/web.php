<?php

use App\Http\Controllers\BackupController;
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

Route::get('/', [RunewordController::class, 'calculator']);

Route::controller(RunewordController::class)->prefix('runewords')->group(function () {
    Route::get('/index', 'index')->name('runewords.index');
    Route::get('/calculator', 'calculator')->name('runewords.calculator');
});

Route::controller(RuneController::class)->prefix('runes')->group(function () {
    Route::get('/index', 'index')->name('runes.index');
    Route::get('/recipes', 'recipes')->name('runes.recipes');
});

Route::controller(BackupController::class)->group(function () {
    Route::get('/backup', [BackupController::class, 'backup'])->name('backup');
    Route::get('/backup-to-source', [BackupController::class, 'moveBackupToSource'])->name('backup-to-source');
});

