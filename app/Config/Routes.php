<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard' , 'Home::dashboard');
$routes->get('/menuList' , 'Home::menus');
$routes->get('/login' , 'Login::index');
$routes->get('managementMenu', 'Menu::index');
$routes->post('managementMenu/addNewMenu', 'Menu::addNewMenu');
$routes->get('managementMenu/deleteMenu/{:segement}' , 'Menu::deleteMenu');
$routes->get('payment' , 'Payment::index' );
$routes->setAutoRoute(true);
$routes->get('/user' , 'User::index');
$routes->setAutoRoute(true);
$routes->get('/penjualan' , 'Penjualan::index');
$routes->setAutoRoute(true);
$routes->get('stock' , 'Stock::index');

