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

$router->get('/', ['uses' => 'MainController@index']);
$router->get('/services', ['uses' => 'MainController@services']);
$router->get('/services/{service}', ['uses' => 'MainController@serviceDetails']);
$router->get('/about', ['uses' => 'MainController@about']);
$router->get('/contact', ['uses' => 'MainController@contact']);
$router->get('/blog', ['uses' => 'MainController@blog']);
$router->get('/blog/{articleId}', ['uses' => 'MainController@article']);
