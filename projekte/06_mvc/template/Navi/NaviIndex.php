<?php

namespace mvc_sixth\Navi;

class NaviIndex
{
    /**
     * @return void
     */
    static public function getNavi(object$init): void
    {
        $ActiveItem = lcfirst($init->getControllerName());
        require_once __DIR__ . '/index.tpl.php';
    }
}