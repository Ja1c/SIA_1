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
    return $router->app->version();
});

// Routes for User1Controller
$router->get('/users1', 'User1Controller@index'); // Get all users
$router->post('/users1', 'User1Controller@add'); // Create a new user
$router->get('/users1/{id}', 'User1Controller@show'); // Get user by ID
$router->put('/users1/{id}', 'User1Controller@update'); // Update user
$router->patch('/users1/{id}', 'User1Controller@update'); // Update user
$router->delete('/users1/{id}', 'User1Controller@delete'); // Delete user

// Routes for User2Controller
$router->get('/users2', 'User2Controller@index'); // Get all users
$router->post('/users2', 'User2Controller@add'); // Create a new user
$router->get('/users2/{id}', 'User2Controller@show'); // Get user by ID
$router->put('/users2/{id}', 'User2Controller@update'); // Update user
$router->patch('/users2/{id}', 'User2Controller@update'); // Update user
$router->delete('/users2/{id}', 'User2Controller@delete'); // Delete user
