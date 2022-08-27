<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->post('/{name}/{age}[/{city}]', function($name,$age,$city=null){
    return $name.' '.$age.' '.$city;
});