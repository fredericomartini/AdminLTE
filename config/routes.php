<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'AdminLTE',
    ['path' => '/admin-l-t-e'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);
