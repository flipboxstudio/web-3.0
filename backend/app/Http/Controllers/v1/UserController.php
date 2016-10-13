<?php

namespace App\Http\Controllers\v1;

use App\User;
use Illuminate\Http\Request;
use Flipbox\Komodo\Facades\Fractal;
use App\Http\Controllers\Controller;
use Flipbox\Komodo\Transformers\EloquentTransformer;
use Symfony\Component\HttpKernel\Exception\HttpException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Fractal::collection(User::all())
            ->transformWith(new EloquentTransformer)
            ->withResourceName('data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        throw new HttpException(501, 'not_implemented');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Fractal::item(User::findOrFail($id))
            ->transformWith(new EloquentTransformer)
            ->withResourceName('data');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        throw new HttpException(501, 'not_implemented');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        throw new HttpException(501, 'not_implemented');
    }
}
