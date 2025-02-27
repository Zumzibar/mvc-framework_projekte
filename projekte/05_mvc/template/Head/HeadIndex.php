<?php
namespace mvc_fifth\Head;
use mvc_fifth\Init;

class HeadIndex{

    static public function getHead($init):void
    {
        $title = TEMPLATEINFOJSON[$init->getActiveController()]['title']; //erst Variable erstellen
        require_once __DIR__ . '/index.tpl.php';
    }
}