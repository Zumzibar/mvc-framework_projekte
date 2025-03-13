<?php

namespace mvc_seventh\Views\If;


class ViewIf
{
    /**
     * @return void
     */
    static function getIf(): void
    {
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
        //require_once __DIR__ . '/index.tpl.html';
    }
}