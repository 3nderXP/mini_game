<?php

require_once(__DIR__."/vendor/autoload.php");

use App\Router\Router;

$router = new Router;

$router->get("profile/:id", function ($require, $response) {

    var_dump(func_get_args());

});