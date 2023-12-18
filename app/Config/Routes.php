<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();


$routes->get('/', 'Home::index');
$routes->post('graficar', 'Home::graficar');
$routes->post('graficarClientes', 'Home::graficarClientes');
$routes->post('graficarProductoPorCategoriaCG', 'Home::getTotalPorCategoriasCG');
$routes->post('graficarVentasPorEmpleado', 'Home::getVentasPorEmpleado');
