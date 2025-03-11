<?php

namespace mvc_seventh\Views\If;

use Smarty\Smarty;

class ViewIf
{
    /**
     * @return void
     */
    static function getIf(): void
    {
        $_SESSION['smarty'] = $smarty = new Smarty();
        $smarty->display(__DIR__ . '/index.tpl.html');
        //require_once __DIR__ . '/index.tpl.html';
    }
}