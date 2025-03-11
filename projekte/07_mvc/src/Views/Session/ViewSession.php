<?php

namespace mvc_seventh\Views\Session;

use Smarty\Smarty;

class ViewSession
{
    /**
     * @return void
     */
    static function getSession(): void
    {
        $_SESSION['smarty'] = $smarty = new Smarty();
        $smarty->display(__DIR__ . '/index.tpl.html');
    }
}