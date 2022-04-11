<?php

use Bramus\Router\Router;

if (!is_cli()) {
    $router = new Router();

    $router->setNamespace('\App\Controllers\Api');

    dd($_POST);

    $router->post('/api/social/contact', 'SocialController@contact');

    /*$router->mount('/api', function() use($router) {
        $router->setNamespace('\App\Controllers\Api');

        $router->mount('/pages', function() use($router) {
            $router->get('/{id}', 'PageController@get');
        });

        $router->mount('/social', function() use($router) {
            $router->post('/contact', 'SocialController@contact');
        });
    });*/

    //$router->setNamespace('\App\Controllers');

    //$router->get('/', 'PageController@index');
    //$router->get('/{slug}', 'PageController@page');

    $router->run();
}