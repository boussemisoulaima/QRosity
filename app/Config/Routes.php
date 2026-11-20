<?php

use App\Controllers\Accueil;
use App\Controllers\Statistique;
use App\Controllers\Admin;
use App\Controllers\Compte;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Actualite;
use App\Controllers\Livredor;
use App\Controllers\Oeuvre;

/** @var RouteCollection $routes */
$routes->get('/', [Accueil::class, 'afficher']);
$routes->get('accueil/afficher', [Accueil::class, 'afficher']);
$routes->get('statistique/afficher', [Statistique::class, 'afficher']);
$routes->get('admin/afficher', [Admin::class, 'afficher']);
$routes->get('compte/lister', [Compte::class, 'lister']);
$routes->get('actualite/afficher', [Actualite::class, 'afficher']);
$routes->get('actualite/afficher/(:num)', [Actualite::class, 'afficher']);
$routes->get('actualite/afficher/(:segment)', [Actualite::class, 'afficher']);
$routes->get('livredor/afficher', [Livredor::class, 'afficher']);


$routes->get('compte/creer', [Compte::class, 'creer']);
$routes->post('compte/creer', [Compte::class, 'creer']);

$routes->get('livredor/ajouter', [Livredor::class, 'ajouter']);
$routes->post('livredor/ajouter', [Livredor::class, 'ajouter']);

$routes->get('oeuvre/afficher', [Oeuvre::class, 'afficher']);

$routes->get('oeuvre/detail/(:num)', [Oeuvre::class, 'detail']);
$routes->get('oeuvre/detail/(:segment)', [Oeuvre::class, 'detail']);

$routes->get('compte/connecter', [Compte::class, 'connecter']);
$routes->post('compte/connecter', [Compte::class, 'connecter']);