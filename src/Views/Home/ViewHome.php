<?php
namespace mvc_second\Views\Home;

class ViewHome{
    static public function getHome():void
    {
        require_once __DIR__ . '/index.tpl.html';
    }
}