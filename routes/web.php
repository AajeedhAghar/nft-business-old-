<?php

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/invsestors', function () {
    return view('investors');
});

Route::get('/list', function () {
    return view('listing');
Route::get('/franchise', function () {
    return view('franchise');
});

Route::get('/business', function () {
    return view('business');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('busninesses', BusinessController::class);
Route::resource('franchises', FranchiseController::class);
Route::resource('investors', InvestorController::class);
Route::resource('formats', FormatController::class);

   