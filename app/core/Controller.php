<?php

namespace core;

class Controller
{
    /**
     * @var View
     */
    protected $view;

    /**
     * Controller constructor
     */
    public function __construct(){
        $this -> view = new View();
    }

    /**
     * rendering main page
     */
    public function index(){
        $this -> view ->render('home');
    }

}