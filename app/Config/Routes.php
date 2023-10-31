<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/pepito', 'Home::index');
$routes->get('/', 'Home::saludo');

