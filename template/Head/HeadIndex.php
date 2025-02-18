<?php
namespace mvc_second\Head;

class HeadIndex{
    static public function getHead():void
    {
        require_once __DIR__ . '/index.tpl.html';
    }

}