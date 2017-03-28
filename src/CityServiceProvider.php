<?php

namespace PolarYouth\Cities;

use Illuminate\Support\ServiceProvider;
use PolarYouth\Cities\Controller\CityController;
use PolarYouth\Cities\Controller\ProvinceController;

/**
 * Class CityServiceProvider
 *
 * @package PolarYouth\Cities
 */
class CityServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if (! class_exists('CreateBelgianCitiesTables')) { // Class doesn't exists
            $timestamp = date('Y_M_D_His', time());

            // File paths
            $source      =  __DIR__ . '/migrations/create_belgian_cities_table.php.stub';
            $destination = database_path("/migrations/{$timestamp}_create_belgian_cities_table.php");

            $this->publishes([$source => $destination], 'migrations');
        }
    }

    /**
     * Register the application services
     */
    public function register()
    {
       $this->app->make(ProvinceController::class);
       $this->app->make(CityController::class);
    }
}