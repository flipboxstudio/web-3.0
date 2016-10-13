<?php

namespace Flipbox\Komodo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Flipbox\Komodo
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
        return 'komodo.fractal';
    }
}
