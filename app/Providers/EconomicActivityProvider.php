<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EconomicActivityProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('economicActivity', function ($app) {
            return new \App\Utils\EconomicActivityGenerator();
        });
    }
}
