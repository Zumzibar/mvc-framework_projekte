<?php
namespace mvc_third\Head;
use mvc_third\Init;

class HeadIndex{

    static public function getHead($init):void
    {
        $title = TEMPLATEINFOJSON[$init->getActiveController()]['title']; //erst Variable erstellen
        require_once __DIR__ . '/index.tpl.php';
    }
}