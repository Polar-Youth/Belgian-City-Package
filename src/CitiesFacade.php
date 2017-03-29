<?php

namespace PolarYouth\Cities;

use Illuminate\Support\Facades\Facade;

/**
 * Class CitiesFacade
 *
 * @package PolarYouth\Cities
 */
class CitiesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'belgian-cities';
    }
}
