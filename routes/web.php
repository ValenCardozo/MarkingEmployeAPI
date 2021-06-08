<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return 'API with LUMEN mini-framework';
});

$router->get('/home', function() use ($router) {
    return MarkingsController::class;
});


$router->group(['namespace' => 'api', 'prefix' => 'api/v1'], function ($router)
{
    $router->post('marking', 'EmployeesMarkingController@createMarkingList');
});