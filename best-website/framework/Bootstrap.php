<?php
/**
 * Created by PhpStorm.
 * User: nickleus
 * Date: 29/11/18
 * Time: 11:05
 */

class Bootstrap
{
    /**
     * @var Route
     */
    private $route;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }

    public function run()
    {
        // Controller@method
        $controllerAction = $this->route->getRoute($_SERVER["REQUEST_URI"]);

        $controllerActionExploded = explode('@', $controllerAction);

        // $controller = new IndexController();
        $controller = new $controllerActionExploded[0];

        $controller->{$controllerActionExploded[1]}();
    }
}