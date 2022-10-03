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
    public function home(){
        $this -> view ->render('home');
    }

    /**
     * rendering contacts-page
     */
    public function contacts(){
        $this -> view ->render('contacts');
    }

    /**
     * rendering About Us page
     */
    public function aboutUs(){
        $this -> view ->render('aboutUs');
    }
}