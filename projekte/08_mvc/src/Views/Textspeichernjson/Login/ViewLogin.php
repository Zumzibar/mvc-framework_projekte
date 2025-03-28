<?php

namespace mvc_eighth\Views\Textspeichernjson\Login;

use Smarty\Smarty;

class ViewLogin
{
    /**
     * @return void
     */
    static function getLogin(): void
    {
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}