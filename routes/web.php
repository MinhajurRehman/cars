<?php

use App\Http\Controllers\bookingController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\serviceController;
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

Route::get('/', [indexController::class, 'index']);
Route::get('/services', [serviceController::class, 'index']);
Route::get('/booking', [bookingController::class, 'index']);
Route::post('/booking', [bookingController::class, 'store']);
