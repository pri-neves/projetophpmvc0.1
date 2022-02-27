<?php

namespace App\controller;

use Symfony\Component\Routing\RouteCollection;

class PageController{
    public function index(RouteCollection $routes){
        $routeToJogo = str_replace('{id}',1,$routes->get('jogo')->getPath());

        require_once APP_ROOT.'/views/home.php';
    }
}

?>