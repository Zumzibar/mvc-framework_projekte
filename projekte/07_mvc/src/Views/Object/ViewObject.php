<?php

namespace mvc_seventh\Views\Object;
use \mvc_seventh\Models\Objects\SmartyObject;
class ViewObject
{
    /**
     * @return void
     */
    static function getObject(): void
    {
        //$_SESSION['smarty']->assign('personen',new SmartyObject());
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }

}