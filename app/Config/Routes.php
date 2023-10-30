<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Exceptions\RouterException;

/** @var RouteCollection $routes */
const MODULE_PATH = APPPATH . 'Modules/__module__/Application/Routes/index.php';
const MODULES_MAPPING = [
    // Route Group => Module Directory Name
    '/users' => 'User',
    '/category' => 'Category',
];

foreach (MODULES_MAPPING as $group => $module) {
    $routes->group($group, function () use ($module, $routes) {
        $path = MODULE_PATH;
        $path = str_replace('__module__', $module, $path);
        if (!file_exists($path)) throw new RouterException("Can't find Routing file for $module Module");

        // Require the routing file for the requested path.
        require_once $path;
    });
}