<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\GarageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserGarageController;

Route::get('/', function () {
    return view('auth.login');
})->name('dashboard');

Route::controller(AuthController::class)->prefix('auth')->group(function(){
    Route::get('index', 'index')->name('indexLogin');

    Route::post('login', 'login')->name('authLogin');

    Route::post('store', 'store')->name('storeAuth');

    Route::get('create', 'create')->name('createLogin');

    Route::get('destroy', 'destroy')->name('destroyLogin');
});

Route::middleware(['auth'])->group(function () {
    
    Route::controller(HomeController::class)->group(function(){
        Route::get('index', 'index')->name('home');

        Route::get('addCar', 'addCar')->name('addCar');

        Route::post('addCarUser', 'addCarUser')->name('addCarUser');
        
        Route::post('addCarAjax', 'addCarAjax')->name('addCarAjax');
        
        Route::get('comboBrandCategor', 'comboBrandCategor')->name('comboBrandCategor');
        
        Route::get('addGarage', 'addGarage')->name('addGarage');

        Route::post('addGarageAjax', 'addGarageAjax')->name('addGarageAjax');

        Route::post('addGarageAjaxView', 'addGarageAjaxView')->name('addGarageAjaxView');
    });

    Route::controller(UserGarageController::class)->prefix('myGarage')->group(function(){
        Route::get('index', 'index')->name('myGarageIndex');

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

});
