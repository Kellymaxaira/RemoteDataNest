<?php

use App\Http\Controllers\DeviceController;
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

//
//Route::controller(DeviceController::class)->prefix('devices')->group(function () {
//
//    Route::get('/', 'index');
//    Route::get('/create', 'create');
//    Route::post('/store',  action:'store');
//    Route::get('/edit/{id}', action:'edit');
//    Route::post('/{id}', action:'update');
//    Route::delete('/{id}', action:'destroy');
//});
//

    Route::resource('devices',DeviceController::class)->middleware(['Auth']);

