<?php

namespace mvc_seventh\Navi;

class NaviIndex
{
    /**
     * @return void
     */
    static public function getNavi(object$init, $smarty): void
    {

        $ActiveItem = lcfirst($init->getControllerName());
        //$smarty->display(__DIR__ . '/index.tpl.php');
        require_once __DIR__ . '/index.tpl.php';
    }
}