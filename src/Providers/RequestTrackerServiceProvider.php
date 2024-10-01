<?php

namespace RenatoMagalhaes\RequestTracker\Providers;

use Illuminate\Support\ServiceProvider;

class RequestTrackerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/request-tracker.php' => config_path('request-tracker.php'),
            ], 'config');
        }
    }

    public function register()
    {
        // Carregar as configurações do pacote
        $this->mergeConfigFrom(__DIR__.'/../../config/request-tracker.php', 'request-tracker');
    }
}
