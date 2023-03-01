<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CortoController;
use App\Http\Controllers\DirectorController;

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
})->name('welcome');

Route::resource('cortos', CortoController::class)->only(['index', 'show', 'create', 'store']);
Route::resource('directores', DirectorController::class)->only(['index', 'create', 'store']);
