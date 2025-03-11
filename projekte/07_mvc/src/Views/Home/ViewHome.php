<?php

namespace mvc_seventh\Views\Home;

class ViewHome
{
    /**
     * @return void
     */
    static function getHome():void
    {
        require_once __DIR__ . '/index.tpl.html';
    }
}