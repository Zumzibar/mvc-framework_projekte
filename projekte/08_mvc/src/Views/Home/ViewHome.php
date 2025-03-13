<?php

namespace mvc_eighth\Views\Home;

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