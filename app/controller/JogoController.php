<?php
namespace App\controller;

use App\model\Jogo;
use Symfony\Component\Routing\RouteCollection;

class JogoController{
    public function show(int $id,RouteCollection $routes){
        $jogo = new Jogo();
        $jogo->read($id);

        require_once APP_ROOT.'/views/jogo.php';
    }
}
?>