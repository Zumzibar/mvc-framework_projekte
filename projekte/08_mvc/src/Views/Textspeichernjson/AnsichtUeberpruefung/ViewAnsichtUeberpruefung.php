<?php

namespace mvc_eighth\Views\Textspeichernjson\AnsichtUeberpruefung;

use Smarty\Smarty;

class ViewAnsichtUeberpruefung
{
    /**
     * @return void
     */
    static function getAnsichtUeberpruefung(): void
    {
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}