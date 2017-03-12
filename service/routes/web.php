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

$app->get('/', function () use ($app){
    return $app->version();
});

$app->post('/register/',
           ['uses' => 'UserController@register',
            'as' => 'register']
          );

$app->get('/wish/',
          ['middleware' => 'auth',
           'uses' => 'WishController@index',
           'as' => 'wishes.index']
          );

$app->get('/wish/{id}','WishController@show');
