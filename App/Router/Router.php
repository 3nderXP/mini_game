<?php

namespace App\Router;

class Router {

    /**
     * 
     * @param String $url Endereço/página que será feita a requisição
     * 
     * @param Callable $callback function ($require, $response) {}
     * 
    */

    public function get(String $url, Callable $callback) {

        $explodeReq = explode("/", $url);

        var_dump($explodeReq);

    }

}