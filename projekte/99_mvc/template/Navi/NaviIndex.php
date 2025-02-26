<?php
namespace mvc_ninetynine\Navi;

class NaviIndex{
    static public function getNavi(object $init):void
    {

        $activeSite = lcfirst($init->getActiveController());
        //$activeSite = TEMPLATEINFOJSON[$init->getActiveController()]['controllerName'];

        require_once __DIR__ . '/index.tpl.php';
    }

}