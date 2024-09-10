<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('/produits', 'Produits::GetProduits');
$routes->get('/marques', 'Marques::GetMarques');

$routes->get('/produit/(:num)', 'Produits::GetProduitByID/$1');
$routes->get('/marque/(:alphanum)', 'Marques::GetMarqueByID/$1');
$routes->get('/marque/(:alphanum)/all', 'Marques::GetProduitsByMarque/$1');
$routes->get('/ages', 'Ages::GetAges');
$routes->get('/age/(:num)', 'Ages::GetAgeByID/$1');
$routes->get('/categories','Categorie::getAllCategorie');
$routes->get('/categorie/(:any)','Categorie::getOneCategorie/$1');
$routes->add('/addcategorie','Categorie::addCategorie');
