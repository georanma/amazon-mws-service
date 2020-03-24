<?php

namespace Georanma\AmazonMwsService;

use Georanma\AmazonMwsService\AmazonService\AmazonCore;
use Georanma\AmazonMwsService\AmazonService\AmazonServiceStatus;
use Illuminate\Support\ServiceProvider;

class AmazonMwsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('amazon-mws-service.php'),
            ], 'config');

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'amazon-mws-service');

        // Register the main class to use with the facade
        $this->app->singleton('amazon-mws-service', function () {
            return new AmazonMwsService;
        });

        $this->app->singleton('amazon-service-status', function(){
            return new AmazonServiceStatus;
        });
    }
}
