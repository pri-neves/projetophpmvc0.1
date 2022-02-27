<?php
namespace App;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\NoConfigurationException;

class Router{
    public function __invoke(RouteCollection $routes){
        $context = new RequestContext();
        $context->fromRequest(Request::createFromGlobals());

        $matcher = new UrlMatcher($routes,$context);

        try{
            $matcher = $matcher->match($_SERVER['REQUEST_URI']);

            array_walk($matcher,function(&$param){
                if(is_numeric($param)){
                    $param = (int) $param;
                }
            });

            $className = 'App\\controller\\'.$matcher['controller'];

            $classInstance = new $className();

            $params = array_merge(array_slice($matcher,2,-1),array('routes'=>$routes));

            call_user_func_array(array($classInstance,$matcher['method']),$params);
        }
        catch(MethodNotAllowedException $e){
            echo "Método não permitido";
        }
        catch(ResourceNotFoundException $e){
            echo "Rota não existe";
        }
        catch(NoConfigurationException $e){
            echo "Configuração não existe";
        }
    }
}

$router = new Router();
$router($routes);