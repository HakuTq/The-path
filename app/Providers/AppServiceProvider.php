<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(\App\Services\SystemDataService::class, function ($app) {
            return new \App\Services\SystemDataService();
        });
    }


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
