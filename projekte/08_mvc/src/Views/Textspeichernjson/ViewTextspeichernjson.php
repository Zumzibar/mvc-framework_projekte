<?php

namespace mvc_eighth\Views\Textspeichernjson;

use Smarty\Smarty;

class ViewTextspeichernjson
{
    /**
     * @return void
     */
    static function getTextspeichernjson(): void
    {
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}