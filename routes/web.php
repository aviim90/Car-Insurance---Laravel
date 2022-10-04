<?php

use App\Http\Controllers\CarController;
use App\Models\Car;
use App\Http\Controllers\OwnerController;
use App\Models\Owner;
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

Route::middleware('auth')->group(function(){
    Route::resources([
        'cars'=>CarController::class
    ]);

//    Route::post('/owners/{id}/addCar',[OwnerController::class,'addCar'])->name('owners.addCar');
    Route::resources([
        'owners'=>OwnerController::class
    ]);
});

//Route::resources('cars',CarController::class);
//Route::resources('owners',CarController::class);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
