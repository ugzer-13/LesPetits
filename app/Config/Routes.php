<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product/(:num)', 'Catalog::productLookupByID/$1');
$routes->get('/products/(:alphanum)', 'Catalog::productsLookupByCategory/$1');