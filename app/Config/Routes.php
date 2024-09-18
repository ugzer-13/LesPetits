<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('/produits', 'Produits::GetProduits');
$routes->get('/marques', 'Marques::GetMarques');

$routes->get('/produit/(:num)', 'Produits::GetProduitByID/$1');
$routes->get('/marque/(:alphanum)', 'Marques::GetProduitsByMarque/$1');
$routes->get('/ages', 'Ages::GetAges');
$routes->get('/age/(:num)', 'Ages::GetAgeByID/$1');
$routes->get('/categories','Categorie::getAllCategorie');
$routes->get('/categorie/(:any)','Categorie::getOneCategorie/$1');



$routes->add('/addcategorie','Categorie::addCategorie');
$routes->get('/getallutilisateur','Utilisateur::getAllUtilisateur');
$routes->get('/getoneutilisateur/(:any)','Utilisateur::getOneUtilisateur/$1');

$routes->get('/suputilisateur/(:any)','Utilisateur::supUtilisateur/$1');
$routes->get('/getemailutilisateur/(:any)','Utilisateur::getEmailUtilisateur/$1');
$routes->add('/addutilisateur','Utilisateur::addUtilisateur');
$routes->add('/majutilisateur/(:any)','Utilisateur::MajUtilisateur/$1');