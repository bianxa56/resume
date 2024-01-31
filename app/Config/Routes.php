<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'UserController::index');
$routes->get('admin', 'AdminController::index');
$routes->get('mine', 'MyController::index');


$routes->get('index', 'MyController::index');
$routes->get('about', 'MyController::aboutMe');
$routes->get('education', 'MyController::education');

$routes->get('form', 'FormController::index');


$routes->get('blog', 'BlogController::index');
$routes->get('blog/create', 'BlogController::create');
$routes->post('blog/store', 'BlogController::store');
$routes->get('blog/edit/(:num)', 'BlogController::edit/$1');
$routes->post('blog/update/(:num)', 'BlogController::update/$1');

//movie routes
$routes->get('movie', 'MovieController::index');
$routes->get('createMovie', 'MovieController::create');
$routes->post('storeMovie', 'MovieController::store');
$routes->get('editMovie/(:num)', 'MovieController::edit/$1');
$routes->post('updateMovie/(:num)', 'MovieController::update/$1');
$routes->get('deleteMovie/(:num)', 'MovieController::delete/$1');

$routes->get('showAll', 'MovieController::showAll');