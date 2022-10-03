<?php

namespace core;
class View
{
    /**
     * rendering page by template
     * @param string $page
     * @param string $template
     */
    public function render(string $page, string $template = TEMPLATE_DEFAULT){
        include_once 'app/resources/views/templates/' .$template .'.php';
    }
}