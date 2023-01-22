<?php

namespace App\Providers;

use App\Services\BrandServices;
use App\Services\CategoryServices;
use App\Services\GarageServices;
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
