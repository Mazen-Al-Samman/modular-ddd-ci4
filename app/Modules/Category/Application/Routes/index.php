<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultNamespace('Modules\Category\Application\Controllers');
$routes->get('/', 'CategoryController::listAllCategories');
$routes->get('(:num)', 'CategoryController::getById/$1');