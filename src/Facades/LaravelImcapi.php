<?php

namespace FredBradley\LaravelImcapi\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelImcapi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelimcapi';
    }
}
