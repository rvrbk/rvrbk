<?php

use Bramus\Router\Router;

if (!is_cli()) {
    $router = new Router();

    $router->mount('/api', function() use($router) {
        $router->setNamespace('\App\Controllers\Api');

        $router->mount('/pages', function() use($router) {
            $router->get('/{id}', 'PageController@getById');
        });
    });

    $router->setNamespace('\App\Controllers');

    $router->post('/send-contactform', 'EmailController@sendContact');
    $router->get('/', 'PageController@index');
    $router->get('/{slug}', 'PageController@page');

    $router->run();
}