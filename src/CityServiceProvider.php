<?php

namespace PolarYouth\Cities;

use Illuminate\Support\ServiceProvider;
use PolarYouth\Cities\Controllers\CityController;
use PolarYouth\Cities\Controllers\ProvinceController;

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
        if (! class_exists('CreateBelgianCitiesTable')) { // Class doesn't exists
            $timestamp = date('Y_m_m_His', time());

            // File paths
            $source      =  __DIR__ . '/migrations/create_belgian_cities_table.php.stub';
            $destination = database_path("/migrations/{$timestamp}_create_belgian_cities_table.php");

            $this->publishes([$source => $destination], 'migrations');
        }

        if (! class_exists('BelgianCitiesSeeder')) { // Class doesn't exists
            // File paths
            $seederSource      = __DIR__ . '/seeds/BelgianCitiesSeeder.php';
            $seederDestination = database_path('/seeds/BelgianCitiesSeeder.php');

            $this->publishes([$seederSource => $seederDestination], 'seeds');
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
