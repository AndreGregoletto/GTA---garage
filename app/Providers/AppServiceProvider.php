<?php

namespace App\Providers;

use App\Services\CarServices;
use App\Services\AuthServices;
use App\Services\HomeServices;
use App\Services\BrandServices;
use App\Services\GarageServices;
use App\Services\CategoryServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        //  Auth
        $this->app->singleton('authService', function(){
            return new AuthServices();
        });

        //  BRAND
        $this->app->singleton('brandService', function(){
            return new BrandServices();
        });

        //  CAR
        $this->app->singleton('carService', function(){
            return new CarServices();
        });

        //  CATEGORY
        $this->app->singleton('categoryService', function(){
            return new CategoryServices();
        });

        //  GARAGE
        $this->app->singleton('garageService', function(){
            return new GarageServices();
        });

        //  HOME
        $this->app->singleton('homeService', function(){
            return new HomeServices();
        });

    }
}
