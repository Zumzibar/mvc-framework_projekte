<?php
namespace mvc_third\Navi;

class NaviIndex{
    static public function getNavi():void
    {
        require_once __DIR__ . '/index.tpl.html';
    }

}