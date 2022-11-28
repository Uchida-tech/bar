<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlcoholController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(AlcoholController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/alcohols', 'store')->name('store');
    Route::get('/alcohols/create', 'create')->name('create');
    Route::get('/alcohols/{alcohol}', 'show')->name('show');
    Route::put('/alcohols/{alcohol}', 'update')->name('update');
    Route::delete('/alcohols/{alcohol}', 'delete')->name('delete');
    Route::get('/alcohols/{alcohol}/edit', 'edit')->name('edit');
});