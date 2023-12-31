<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'admin\Home::index');
$routes->get('/home', 'admin\Home::index');

$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');

$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');

$routes->get('/admin', 'admin\Home::index');
$routes->get('/admin/home', 'admin\Home::index');

$routes->get('/admin/employee', 'admin\Employee::index');
$routes->get('/admin/employee/read/(:segment)', 'admin\Employee::read/$1');
$routes->post('/admin/employee/create', 'admin\Employee::create');
$routes->post('/admin/employee/update/(:segment)', 'admin\Employee::update/$1');
$routes->get('/admin/employee/delete/(:segment)', 'admin\Employee::delete/$1');

$routes->get('/admin/criteria', 'admin\Criteria::index');
$routes->get('/admin/criteria/read/(:segment)', 'admin\Criteria::read/$1');
$routes->post('/admin/criteria/create', 'admin\Criteria::create');
$routes->post('/admin/criteria/update/(:segment)', 'admin\Criteria::update/$1');
$routes->get('/admin/criteria/delete/(:segment)', 'admin\Criteria::delete/$1');


$routes->get('/admin/result', 'admin\Result::index');
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
