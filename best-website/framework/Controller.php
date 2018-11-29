<?php

class Controller
{
    protected function render(string $view, array $data = array())
    {
        extract($data);

        include "views/$view.php";
    }
}