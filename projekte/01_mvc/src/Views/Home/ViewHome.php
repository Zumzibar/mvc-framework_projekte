<?php
namespace mvcFirst\Views\Home;

class ViewHome{
    static public function getHome(){
        require_once __DIR__ . '/index.tpl.html';
    }
}