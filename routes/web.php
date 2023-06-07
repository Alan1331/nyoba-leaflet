<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapsController;

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

Route::get('/maps', function () {
    return view('leaflet-maps');
});

Route::post('/maps/action', [MapsController::class, 'action'])->name('ajaxupload.action');
