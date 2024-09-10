<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/produits', 'Produits::GetProduits');
$routes->get('/marques', 'Marques::GetMarques');

$routes->get('/produit/(:num)', 'Produits::GetProduitByID/$1');
$routes->get('/marque/(:num)', 'Marques::GetMarqueByID/$1');
$routes->get('/marque/(:num)/all', 'Marques::GetProduitsByMarque/$1');
$routes->get('/ages', 'Ages::GetAges');
$routes->get('/age/(:num)', 'Ages::GetAgeByID/$1');
$routes->get('/getAllCategorie','Categorie::getAllCategorie');
$routes->get('/getOneCategorie/(:any)','Categorie::getOneCategorie/$1');
$routes->get('/addCategorie','Categorie::addCategorie');
$routes->add('/addcategorie2','Categorie::addCategorie2');
$routes->get('getAllPosts','Api::getAllPosts');
$routes->get('/addPost','Api::addPost');