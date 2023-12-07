<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard' , 'Home::dashboard');
$routes->get('/menus' , 'Home::menus');
$routes->get('/login' , 'Login::index');
$routes->get('/user' , 'User::index');
$routes->setAutoRoute(true);
$routes->get('menu', 'Menu::index');
$routes->setAutoRoute(true);
$routes->get('/penjualan' , 'Penjualan::index');
$routes->setAutoRoute(true);

