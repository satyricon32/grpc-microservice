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


use Illuminate\Http\Request;

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->group(['middleware' => \App\Http\Middleware\Authorize::class, 'prefix' => 'api'], function () use ($router) {
    $router->get('/test', function () {
        return 'success';
    });
    $router->post('/testCreate', function (Request $request) {
        return $request->all();
    });
    $router->get('/testToken/{token}', function ($token) {
        return checkToken($token);
    });
});