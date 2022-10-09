<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ShortCodeController;
use App\Models\Car;
use App\Http\Controllers\OwnerController;
use App\Models\Owner;
use App\Models\ShortCode;
use Illuminate\Support\Facades\Auth;
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
Route::get('cars', [CarController::class, 'index'])->name('cars.index');
Route::get('owners', [OwnerController::class, 'index'])->name('owners.index');
Route::get('shortC', [ShortCodeController::class, 'index'])->name('shortC.index');

Route::middleware(['auth','code','userType'])->group(function() {
    Route::resource('cars', CarController::class)->except(['index']);
    Route::resource('owners', OwnerController::class)->except(['index']);
    Route::resource('shortC', ShortCodeController::class)->except(['index']);
});



//Route::resource('shortC', ShortCodeController::class);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
