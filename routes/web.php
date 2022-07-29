<?php

use App\Http\Controllers\RateAd;
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
Route::get('/',[RateAd::class,'ad'])->name('ad');

Route::get('/ad',[RateAd::class,'ad'])->name('ad');
Route::get('/se',[RateAd::class,'se'])->name('se');
Route::post('ratead',[RateAd::class,'ratead'])->name('ratead');
Route::get('/show',[RateAd::class,'show'])->name('show');
Route::post('ratese',[RateAd::class,'ratese'])->name('ratese');
