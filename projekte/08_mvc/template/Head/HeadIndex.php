<?php
namespace mvc_eighth\Head;
use mvc_fifth\Init;

class HeadIndex{

    static public function getHead($init, $smarty):void
    {
        $smarty->assign('title', TEMPLATEINFOJSON[$init->getControllerName()]['title']??'');
        $smarty->display(__DIR__ . '/index.tpl.html');
    }
}