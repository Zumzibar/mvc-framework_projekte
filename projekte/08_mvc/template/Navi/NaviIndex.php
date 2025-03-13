<?php

namespace mvc_eighth\Navi;

class NaviIndex
{
    /**
     * @return void
     */
    static public function getNavi(object$init, $smarty): void
    {

        //$ActiveItem = lcfirst($init->getControllerName());
        //$smarty->display(__DIR__ . '/index.tpl.php');
        //require_once __DIR__ . '/index.tpl.php';

        $activeItem = lcfirst($init->getControllerName() ?? ''); //Controller-Name als Variable deklarieren
        $smarty->assign('ActiveItem', $activeItem); //Controller-Name-Variable als smarty-Variable zuweisen
        $smarty->assign('Menue', array_values(TEMPLATEINFOJSON)); //json in smarty-Variable Menue schreiben
        $smarty->display(__DIR__ . '/index.tpl.php'); //index aufrufen
    }
}