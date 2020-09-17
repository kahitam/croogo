<?php

use Cake\Routing\RouteBuilder;

$routes->plugin('Croogo/Taxonomy', ['path' => '/'], function (RouteBuilder $route) {
    $route->prefix('Admin', function (RouteBuilder $route) {
        $route->setExtensions(['json']);

        $route->scope('/taxonomy', [], function (RouteBuilder $route) {
            $route->fallbacks();
        });
    });
});

$routes->plugin('Croogo/Taxonomy', ['path' => '/'], function (RouteBuilder $route) {
    $route->prefix('api', function (RouteBuilder $route) {
        $route->prefix('v10', ['path' => '/v1.0'], function (RouteBuilder $route) {
            $route->setExtensions(['json']);

            $route->resources('Taxonomies');
            $route->resources('Terms');
            $route->resources('Types');
            $route->resources('Vocabularies');
        });
    });
});
