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
// $routes->add('/coba', 'coba::index');
// $routes->get('/tugas', 'tugas::index');
// $routes->add('/tugas', 'tugas::create');
$routes->get('/jurusan', 'JurusanController::index');
$routes->get('/jurusan/tambah', 'JurusanController::tambah');
$routes->get('/jurusan/edit/(:num)', 'JurusanController::edit/$1');
$routes->post('/jurusan/update/(:num)', 'JurusanController::updateJurusan/$1');
$routes->get('/jurusan/delete/(:num)', 'JurusanController::deleteJurusan/$1');
$routes->post('/jurusan/store', 'JurusanController::store');
// karyawan
$routes->get('/karyawan', 'KaryawanController::index');
$routes->get('/karyawan/tambah', 'KaryawanController::tambah');
$routes->post('/karyawan/store', 'KaryawanController::store');
$routes->get('/karyawan/edit/(:num)', 'KaryawanController::edit/$1');
$routes->post('/karyawan/update/(:num)', 'KaryawanController::updateKaryawan/$1');
$routes->get('/karyawan/delete/(:num)', 'KaryawanController::deleteKaryawan/$1');


$routes->group('', ['filter' => 'login'], function($routes){
    $routes->get('dashboard', 'Home::dashboard');
    $routes->get('/tugas', 'KaryawanController::index');
    $routes->add('/tugas', 'KaryawanController::create');
});

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
