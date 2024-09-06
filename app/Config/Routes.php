<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Auth Routes
$routes->get('login', 'Auth::login');
$routes->post('/auth/login', 'Auth::login');
$routes->get('register', 'Auth::register');
$routes->post('auth/register', 'Auth::register');
$routes->get('logout', 'Auth::logout');

$routes->get('/image/(:segment)', 'Image::foto/$1');

$routes->group('admin', ['filter' => 'role:admin'], static function ($routes) {
    $routes->get('dashboard', 'Admin\Dashboard::index');
    $routes->get('pengguna', 'Admin\Pengguna::index');
    $routes->post('pengguna/update/(:num)', 'Admin\Pengguna::update/$1');
    $routes->post('pengguna/delete/(:num)', 'Admin\Pengguna::delete/$1');
    $routes->get('pendaftar', 'Admin\Pendaftar::index');
    $routes->post('pendaftar', 'Admin\Pendaftar::store');
    $routes->post('pendaftar/update/(:num)', 'Admin\Pendaftar::update/$1');
    $routes->post('pendaftar/delete/(:num)', 'Admin\Pendaftar::delete/$1');
    $routes->post('pendaftar/verify/(:num)', 'Admin\Pendaftar::verify/$1');
});

$routes->group('user', ['filter' => 'role:user'], static function ($routes) {
    $routes->get('dashboard', 'User\Dashboard::index');
    $routes->get('ppdb', 'User\Dashboard::show_ppdb');
    $routes->post('ppdb', 'User\Dashboard::store_ppdb');
    $routes->post('ppdb/update/(:num)', 'User\Dashboard::update_ppdb/$1');
});
