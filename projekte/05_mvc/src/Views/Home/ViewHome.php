<?php
namespace mvc_fifth\Views\Home;

class ViewHome{
    static public function getHome():void
    {
        require_once __DIR__ . '/index.tpl.html';
    }
}