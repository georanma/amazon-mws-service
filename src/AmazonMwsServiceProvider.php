<?php

namespace Georanma\AmazonMwsService;

use Georanma\AmazonMwsService\MerchantFulfillment\Client;
use Illuminate\Support\ServiceProvider;

class AmazonMwsServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                __DIR__.'/../config/config.php' => config_path('amazon-mws-service.php'),
                ], 'config'
            );

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

        $this->app->singleton(
            'fulfillment', function () {
                dd(new Client());
            }
        );

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['fulfillment'];
    }
}
