<?php

namespace App\Providers;

use App\Services\BrandServices;
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
    }
}
