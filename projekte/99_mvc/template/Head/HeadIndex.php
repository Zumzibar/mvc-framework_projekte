<?php
namespace mvc_ninetynine\Head;
use mvc_ninetynine\Init;

class HeadIndex{

    static public function getHead($init):void
    {
        $title = TEMPLATEINFOJSON[$init->getActiveController()]['title']; //erst Variable erstellen
        require_once __DIR__ . '/index.tpl.php';
    }
}