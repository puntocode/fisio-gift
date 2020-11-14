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

Route::get('/', [App\Http\Controllers\GiftCardController::class, 'create'])->name('gift.create');
Route::post('/gift/store', [App\Http\Controllers\GiftCardController::class, 'store'])->name('gift.store');

Auth::routes();

