<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
});
Route::resource('etudiants', EtudiantController::class);
Route::resource('formations', FormationController::class);
