<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Page::index');

$routes->get('/login', 'Page::login');

$routes->get('/home_page', 'page::home_page');

$routes->get('/signup', 'Page::signup');

$routes->get('/menu', 'Page::menu');
$routes->get('menu', 'Menu::index');

$routes->get('/keranjang', 'Page::keranjang');

$routes->get('keranjang', 'Keranjang::index');

$routes->get('keranjang/tambah/(:num)', 'Keranjang::tambah/$1');


$routes->get('/profile', 'Page::profile');

$routes->get('/edit_profile', 'Page::edit_profile');

$routes->get('/order_info', 'Page::order_info');

$routes->get('/about', 'Page::about');


