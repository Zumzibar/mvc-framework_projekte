<?php
namespace mvcFirst\Foot;

class FootIndex{
    static public function getFoot(){
        require_once __DIR__ . '/index.tpl.html';
    }
}