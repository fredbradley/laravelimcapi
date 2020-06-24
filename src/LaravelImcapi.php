<?php

namespace FredBradley\LaravelImcapi;

use FredBradley\IMCAPI\Imcapi;

class LaravelImcapi extends Imcapi
{
    public function __construct()
    {
        parent::__construct(
            config('imcapi.api_uri'),
            config('imcapi.username'),
            config('imcapi.password')
        );

    }
}
