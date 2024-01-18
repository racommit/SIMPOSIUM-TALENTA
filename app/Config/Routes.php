<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pages/tables', 'Home::live');
$routes->get('/pages/tables2', 'Home::comingsoon');
$routes->get('/pages/profile', 'Home::profile');
// $routes->get('/pages/dashboard', 'Home::dashboard');
