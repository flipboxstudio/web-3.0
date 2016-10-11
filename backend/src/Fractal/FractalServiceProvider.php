<?php

namespace Flipbox\Fractal;

use Illuminate\Support\ServiceProvider;
use Spatie\Fractal\FractalLumenServiceProvider;
use Flipbox\Fractal\Serializers\FlipboxSerializer;

class FractalServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->app->register(FractalLumenServiceProvider::class);

        $this->app->singleton('flipbox-fractal', function ($app) {
            return $app->make(Factory::class)
                ->serializeWith($app->make(FlipboxSerializer::class));
        });
    }
}
