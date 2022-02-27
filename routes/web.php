<?php
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('jogo', new Route(constant('URL_SUBFOLDER').'/jogo/{id}',array('controller'=>'JogoController','method'=>'show'),array('id'=>'[0-9]+')));
$routes->add('homepage', new Route(constant('URL_SUBFOLDER').'/',array('controller'=>'PageController','method'=>'index'),array()));

?>