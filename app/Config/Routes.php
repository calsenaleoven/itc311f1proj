<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'Home::test');
$routes->get('/main', 'MainController::index');
$routes->post('/save', 'MainController::save');
$routes->post('/delete/(:any)', 'MainController::delete/$1');