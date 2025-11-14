<?php

namespace Config;

$routes = Services::routes();

// Router Setup
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('CvController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

// AutoRoute ON (boleh untuk project UTS)
$routes->setAutoRoute(true);

// ROUTES
$routes->get('/', 'CvController::index');
$routes->get('/home', 'Home::index');
