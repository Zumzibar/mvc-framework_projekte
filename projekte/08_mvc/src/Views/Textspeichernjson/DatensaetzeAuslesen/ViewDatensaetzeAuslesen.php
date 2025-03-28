<?php

namespace mvc_eighth\Views\Textspeichernjson\DatensaetzeAuslesen;

use Smarty\Smarty;

class ViewDatensaetzeAuslesen
{
    /**
     * @return void
     */
    static function getDatensaetzeAuslesen(): void
    {
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}