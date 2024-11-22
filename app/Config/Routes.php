<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/inscription', 'Home::index');
//$routes->post('/confirmation', 'Home::inscription');
//$routes->post('/validation', 'Home::validation');

//$routes->get('/', 'LivreController::index'); 
// $routes->post('/createlivre', 'LivreController::createLivre'); 
// $routes->get('/', 'TestController::index' );
// $routes->post('/login', 'TestController::login' );
// $routes->get('/welcome', 'TestController::welcome' );


$routes->get('/', 'ProduittController::index');
$routes->post('/addproduit', 'ProduittController::store');
$routes->get('/invantaire', 'ProduittController::invantaire');
