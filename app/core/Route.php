<?php

namespace core;
class Route
{

    /**
     * return 404 code if page not found
     */
    static public function notFound(){
        http_response_code(404);
        exit();
    }
    /**
     * initialisation of page by get param
     */
    static public function init(){
        $action = 'index';
        $actionInput = filter_input(INPUT_GET,'action');
        if ($actionInput){
            $action = $actionInput;
        }
        $controller = new Controller();
        if (!method_exists($controller, $action)){
            self::notFound();
        }
        $controller -> $action();
    }
    /**
     * change get param of page by links
     * @param $action
     * @return string
     */
    static public function url($action){
        return "/?action=$action";
    }
}