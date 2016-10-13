<?php

namespace Flipbox\Komodo;

use Illuminate\Config\Repository;
use Flipbox\Komodo\Exception\Handler;
use Illuminate\Support\ServiceProvider;
use Spatie\Fractal\FractalLumenServiceProvider;
use Flipbox\Komodo\Serializers\FlipboxSerializer;
use Illuminate\Contracts\Debug\ExceptionHandler as LaravelExceptionHandler;

class KomodoServiceProvider extends ServiceProvider
{
    protected $config = [];

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->app->register(FractalLumenServiceProvider::class);

        $this->app->singleton('komodo.fractal', function ($app) {
            return $app->make(Factory::class)
                ->serializeWith($app->make(FlipboxSerializer::class));
        });

        $this->app->singleton([Router::class => 'komodo.router'], Router::class);

        $this->mergeConfigFrom(
            __DIR__.'/config/komodo.php',
            'komodo'
        );

        $this->config = $this->app
            ->make('config')
            ->get('komodo', []);

        $this->app->instance(LaravelExceptionHandler::class, new Handler(
            $this->app->make(LaravelExceptionHandler::class),
            $this->config['error']['format'],
            $this->config['error']['debug']
        ));
    }
}
