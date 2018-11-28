<?php
function autoload($className){
    $className = ltrim($className, '\\');
    $fileName = $namespace = '';

    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;

        $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

        require $fileName;
    }
}

spl_autoload_register("autoload");

use classes\Person as P;

use classes\Dog;

$peron = new P("john", "Doe", "black", "18", "male");
var_dump($peron);

$dog = new Dog("black", 3, "female");
var_dump($dog);