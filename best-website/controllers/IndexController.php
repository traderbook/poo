<?php

class IndexController extends Controller
{
    public function index()
    {
        $this->render('index', array(
            'name' => "Bibi"
        ));
    }

    public function otherPage()
    {
        $this->render('other-page');
    }
}