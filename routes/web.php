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

$router->get('/home', 'MarkingsController@createMarkingList');

$router->post('/employee/create', 'EmployeesController@createEmployee');

$router->get('/employee/list', 'EmployeesController@getEmployee');

$router->delete('/employee/delete', 'EmployeesController@deleteEmployee');
