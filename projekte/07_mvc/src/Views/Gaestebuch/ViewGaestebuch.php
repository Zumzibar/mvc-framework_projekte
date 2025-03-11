<?php

namespace mvc_seventh\Views\Gaestebuch;

class ViewGaestebuch
{
    /**
     * @return void
     */
    static function getGaestebuch ():void
    {
        require_once __DIR__ . '/index.tpl.html';
    }
}