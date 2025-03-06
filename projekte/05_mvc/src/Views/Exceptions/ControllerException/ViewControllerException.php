<?php

namespace mvc_fifth\Views\Exceptions\ControllerException;

class ViewControllerException
{
    static public function getControllerException():void
    {
        require_once __DIR__ . '/index.tpl.php';
    }
}