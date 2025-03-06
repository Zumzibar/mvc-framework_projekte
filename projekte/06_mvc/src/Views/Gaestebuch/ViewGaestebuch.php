<?php

namespace mvc_sixth\Views\Gaestebuch;

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