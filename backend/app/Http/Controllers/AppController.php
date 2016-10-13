<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Application;
use Flipbox\Komodo\Facades\Fractal;
use Flipbox\Komodo\Transformers\ArrayTransformer;

class AppController extends Controller
{
    public function index(Application $app)
    {
        return Fractal::item([
            'name' => 'Web 3.0',
            'version' => $app->version(),
        ])
        ->transformWith(new ArrayTransformer())
        ->withResourceName('data')
        ->withStatus('ok')
        ->withMessage('success');
    }
}
