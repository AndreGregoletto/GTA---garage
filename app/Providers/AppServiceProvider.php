<?php

namespace App\Providers;

use App\Services\CarServices;
use App\Services\BrandServices;
use App\Services\GarageServices;
use App\Services\CategoryServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
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

    }
}
