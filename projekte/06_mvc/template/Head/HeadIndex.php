<?php
namespace mvc_sixth\Head;
use mvc_fifth\Init;

class HeadIndex{

    static public function getHead($init):void
    {
        $title = TEMPLATEINFOJSON[$init->getControllerName()]['title']??''; //erst Variable erstellen
        require_once __DIR__ . '/index.tpl.php';
    }
}