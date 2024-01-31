<?php

namespace ManianRezaei\LaravelLightApi\providers;

use Illuminate\Support\ServiceProvider;

class ApiLightServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->publishes([
            __DIR__.'/../config/apilight.php' => config_path('apilight.php'),
        ]);

    }
}
