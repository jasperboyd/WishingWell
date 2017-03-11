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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/{id}', function($id) use ($app) {
    $wish = Wish::query()->findOrFail($id);
    return ['wish' => $wish];
});

$app->post('/wish', function () use ($app) {

});
