<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;
use App\Models\Car;
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

Route::resource('owners', OwnerController::class);
Route::resource('cars', CarController::class);
Route::get('/cars.index',[CarController::class, 'cars.index'])->name('cars');

