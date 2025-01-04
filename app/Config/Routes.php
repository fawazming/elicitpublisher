<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::csoon');
$routes->get('/', 'Home::index');
$routes->get('/journal/(:any)', 'Home::journal/$1');
// $routes->get('/plagiarism-policies', 'Home::impLinks');
$routes->get('/gallery', 'Home::gallery');
$routes->get('/blog', 'Home::blog');
$routes->get('/blog/(:any)/(:any)/(:any)', 'Home::singleBlog/$1/$2/$3');
$routes->get('/blog/(:any)', 'Home::blogD/$1');
$routes->get('/tests', 'Home::tests');
$routes->get('/(:any)', 'Home::pages/$1');
