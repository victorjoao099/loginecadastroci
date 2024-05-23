<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->match(['get', 'POST'], 'login', 'login::index');
$routes->match(['get', 'POST'], 'cadastro', 'cadastro::index', ['as' => 'cadastro.index']);

$routes->match(['get', 'POST'], 'admin', 'admin::index', ['as' => 'admin.index'] , ['filter' => 'auth']);
$routes->match(['get', 'POST'], 'logout', 'logout::index', ['as' => 'logout.index']);


