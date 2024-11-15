<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::csoon');
$routes->get('/dev', 'Home::index');
$routes->get('/gallery', 'Home::gallery');
$routes->get('/blog', 'Home::blog');
$routes->get('/blog/(:any)/(:any)/(:any)', 'Home::singleBlog/$1/$2/$3');
$routes->get('/blog/(:any)', 'Home::blogD/$1');
$routes->get('/tests', 'Home::tests');
$routes->get('/(:any)', 'Home::pages/$1');
