<?php

namespace mvc_eighth\Views\Verzeichniserstellung;

use Smarty\Smarty;

class ViewVerzeichniserstellung
{
    /**
     * @return void
     */
    static function getVerzeichniserstellung(): void
    {
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}