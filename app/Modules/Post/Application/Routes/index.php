<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultNamespace('Modules\Post\Application\Controllers');
$routes->get('/', 'PostController::listAllPosts');
$routes->get('(:num)', 'PostController::getById/$1');