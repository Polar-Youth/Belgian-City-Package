<?php

namespace PolarYouth\Cities;

use Illuminate\Support\ServiceProvider;

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
            $source      =  __DIR__ . '/migrations/create_belgian_cities_table';
            $destination = database_path("/migrations/{$timestamp}_create_belgian_cities_table.php");

            $this->publishes([$source => $destination]);
        }
    }

    /**
     * Register the application services
     */
    public function register()
    {
       //
    }
}