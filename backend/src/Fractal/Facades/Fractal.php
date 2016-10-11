<?php

namespace Flipbox\Fractal\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Flipbox\Fractal
 */
class Fractal extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flipbox-fractal';
    }
}
