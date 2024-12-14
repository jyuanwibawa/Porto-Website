<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('/tutorial', 'Home::tutorial');
$routes->get('/inspiration', 'Home::inspiration');
$routes->get('/undertone', 'Home::undertone');
$routes->get('/tryon', 'Home::tryon');




$routes->get('/login', 'Auth::login');
$routes->post('/auth/cek_login', 'Auth::cek_login');
$routes->get('/logout', 'Auth::logout');

$routes->get('kelola_undertone', 'Admin::index');
$routes->get('/tambah_undertone', 'Admin::tambah_undertone');
$routes->post('/save_undertone', 'Admin::save_undertone');
$routes->get('/edit_undertone/(:num)', 'Admin::edit_undertone/$1');
$routes->post('/simpan_edit_undertone', 'Admin::simpan_edit_undertone');
$routes->post('simpan_edit_undertone/(:num)', 'Admin::simpan_edit_undertone/$1');
$routes->get('/hapus_undertone/(:num)', 'Admin::hapus_undertone/$1');   


$routes->get('/kelola_video', 'Admin::kelola_video');
$routes->get('/tambah_video', 'Admin::tambah_video');
$routes->post('/save_video', 'Admin::save_video');
$routes->get('/edit_video/(:num)', 'Admin::edit_video/$1');
$routes->post('/simpan_edit_video', 'Admin::simpan_edit_video');
$routes->get('/hapus_video/(:num)', 'Admin::hapus_video/$1');

$routes->get('/kelola_artikel', 'Admin::kelola_artikel');
$routes->get('/tambah_artikel', 'Admin::tambah_artikel');
$routes->post('/save_artikel', 'Admin::save_artikel');
$routes->get('/edit_artikel/(:num)', 'Admin::edit_artikel/$1');
$routes->post('/simpan_edit_artikel', 'Admin::simpan_edit_artikel');
$routes->get('/hapus_artikel/(:num)', 'Admin::hapus_artikel/$1');

$routes->get('kelola_warna', 'Admin::kelola_warna');
$routes->get('tambah_warna', 'Admin::tambah_warna');
$routes->post('save_warna', 'Admin::save_warna');
$routes->get('edit_warna/(:num)', 'Admin::edit_warna/$1');
$routes->post('simpan_edit_warna', 'Admin::simpan_edit_warna');
$routes->post('simpan_edit_warna/(:num)', 'Admin::simpan_edit_warna/$1');
$routes->get('hapus_warna/(:num)', 'Admin::hapus_warna/$1');

$routes->get('home/tryon/(:num)', 'Home::tryon/$1');
$routes->get('home/tryon/(:num)/(:num)', 'Home::tryon/$1/$2');



