<?php

namespace mvc_eighth\Views\Datatables;

use Smarty\Smarty;

class ViewDatatables
{
    /**
     * @return void
     */
    static function getDatatables(): void
    {
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}