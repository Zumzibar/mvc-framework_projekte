<?php

namespace mvc_eighth\Views\Dropzone;

use Smarty\Smarty;

class ViewDropzone
{
    /**
     * @return void
     */
    static function getDropzone(): void
    {
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}