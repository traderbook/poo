<?php
/**
 * Created by PhpStorm.
 * User: nickleus
 * Date: 29/11/18
 * Time: 10:58
 */

class Route
{
    private $routes = array();

    public function addRoute(string $uri, string $controllerAction)
    {
        $this->routes[$uri] = $controllerAction;
    }

    public function getRoute(string $name): string
    {
        return $this->routes[$name];
    }
}