<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GarageController;
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

Route::get('teste', function(){
    return view('teste');
});

Route::controller(BrandController::class)->prefix('brand')->group(function(){
    Route::get('index', 'index')->name('brandIndex');

    Route::post('store', 'store')->name('brandStore');

    Route::post('updated', 'updated')->name('brandUpdated');

    Route::post('destroy', 'destroy')->name('brandDestroy');
});

Route::controller(CarController::class)->prefix('car')->group(function(){
    Route::get('index', 'index')->name('carIndex');

    Route::post('store', 'store')->name('carStore');

    Route::post('updated', 'updated')->name('carUpdated');

    Route::post('destroy', 'destroy')->name('carDestroy');
});

Route::controller(CategoryController::class)->prefix('category')->group(function(){
    Route::get('index', 'index')->name('categoryIndex');

    Route::post('store', 'store')->name('categoryStore');

    Route::post('updated', 'updated')->name('categoryUpdated');

    Route::post('destroy', 'destroy')->name('categoryDestroy');
});

Route::controller(GarageController::class)->prefix('garage')->group(function(){
    Route::get('index', 'index')->name('garageIndex');

    Route::post('store', 'store')->name('garageStore');

    Route::post('updated', 'updated')->name('garageUpdated');

    Route::post('destroy', 'destroy')->name('garageDestroy');
});
