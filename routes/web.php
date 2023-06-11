<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminDashboardController;
use \App\Http\Controllers\FrontendController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/home', [FrontendController::class, 'index']);
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/masters-program', [FrontendController::class, 'mastersProgram'])->name('mastersProgram');
Route::get('/technology', [FrontendController::class, 'technology'])->name('technology');
Route::get('/approch', [FrontendController::class, 'approch'])->name('approch');


Route::get('/admin-dashboard', [AdminDashboardController::class, 'index']);
