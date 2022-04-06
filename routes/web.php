<?php

use Bramus\Router\Router;

if (!is_cli()) {
    $router = new Router();

    $router->setNamespace('\App\Controllers');

    $router->post('/send-contactform', 'EmailController@sendContact');
    $router->get('/{slug}', 'PageController@index');

    $router->run();
}