<?php
namespace mvcFirst\Head;

class HeadIndex{
    static public function getHead(){
        require_once __DIR__ . '/index.tpl.html';
    }

}