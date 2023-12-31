<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('Modules\User\Application\Controllers');
$routes->get('/', 'UserController::getStatistics');
$routes->get('(:num)/posts', 'ContractController::getUserPosts/$1');