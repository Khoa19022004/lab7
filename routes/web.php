<?php

use App\Http\Controllers\HsController;
use App\Http\Controllers\SvController;
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
Route::get('hs',[HsController::class,'hs'])->name('hs');
Route::post('hs',[HsController::class,'hs_store'])->name('hs_store');

Route::get('sv',[SvController::class,'sv'])->name('sv');
Route::post('sv',[SvController::class,'sv_store'])->name('sv_store');