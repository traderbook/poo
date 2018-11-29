<?php

require_once 'framework/Route.php';
require_once 'framework/Controller.php';
require_once 'framework/Bootstrap.php';
require_once 'controllers/IndexController.php';

// l'url "/" => IndexController@index
// l'url "/other-page" => IndexController@otherPage

$route = new Route();

$route->addRoute('/', 'IndexController@index');
$route->addRoute('/other-page', 'IndexController@otherPage');

$bootstrap = new Bootstrap($route);

$bootstrap->run();
