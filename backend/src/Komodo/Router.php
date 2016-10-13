<?php

namespace Flipbox\Komodo;

use Illuminate\Support\Arr;
use Laravel\Lumen\Application;

class Router
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function resource($path, $controller)
    {
        $name = $this->getResourceName($path);

        $this->app->get($path, ['as' => "{$name}.index", 'uses' => $controller.'@index']);
        $this->app->post($path, ['as' => "{$name}.store", 'uses' => $controller.'@store']);
        $this->app->get($path.'/{id}', ['as' => "{$name}.show", 'uses' => $controller.'@show']);
        $this->app->put($path.'/{id}', ['as' => "{$name}.update", 'uses' => $controller.'@update']);
        $this->app->patch($path.'/{id}', ['as' => "{$name}.update", 'uses' => $controller.'@update']);
        $this->app->delete($path.'/{id}', ['as' => "{$name}.destroy", 'uses' => $controller.'@destroy']);
    }

    protected function getResourceName($path)
    {
        return Arr::last(explode('/', $path));
    }
}
