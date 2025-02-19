<?php
namespace mvc_fourth\Foot;

class FootIndex{
    static public function getFoot():void
    {
        require_once __DIR__ . '/index.tpl.html';
    }
}