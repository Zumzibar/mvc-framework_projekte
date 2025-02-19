<?php
namespace mvc_third\Foot;

class FootIndex{
    static public function getFoot():void
    {
        require_once __DIR__ . '/index.tpl.html';
    }
}