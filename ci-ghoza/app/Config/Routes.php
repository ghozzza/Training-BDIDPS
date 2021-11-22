<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

// studio
$routes->get('/studio', 'StudioController::index');
$routes->get('/studio/tambah', 'StudioController::tambah');
$routes->post('/studio/store', 'StudioController::store');
$routes->get('/studio/delete/(:num)', 'StudioController::deleteStudio/$1');
$routes->get('/studio/edit/(:num)', 'StudioController::edit/$1');
$routes->post('/studio/update/(:num)', 'StudioController::updateStudio/$1');

// register
$routes->get('/register', 'RegisterController::index');
$routes->get('/register/admin', 'RegisterController::admin');
$routes->post('/register/store', 'RegisterController::store');
$routes->post('/register/storeAdmin', 'RegisterController::storeAdmin');

// login
// $routes->get('/login', 'RegisterController::loginPage');
$routes->get('/login', 'LoginController::index');
$routes->post('/login/proses', 'LoginController::proses');
$routes->get('/login/logout', 'LoginController::logout');

// transaksi
$routes->get('/transaksi/(:num)', 'TransaksiController::index/$1');
$routes->post('/transaksi/store', 'TransaksiController::store');
$routes->get('/transaksi/list', 'TransaksiController::list');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
