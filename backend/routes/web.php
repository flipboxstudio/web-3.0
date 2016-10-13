<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', 'AppController@index');

$app->group(['middleware' => ['auth'], 'namespace' => 'App\Http\Controllers'], function ($app) {
    $app['komodo.router']->resource('/v1/user', 'v1\UserController');
});
