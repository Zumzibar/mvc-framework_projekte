<?php

namespace mvc_eighth\Views\Csv;

use Smarty\Smarty;

class ViewCsv
{
    /**
     * @return void
     */
    static function getCsv(): void
    {
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}