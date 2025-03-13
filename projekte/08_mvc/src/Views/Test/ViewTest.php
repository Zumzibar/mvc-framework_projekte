<?php

namespace mvc_eighth\Views\Test;

class ViewTest
{
    /**
     * @return void
     */
    static function getTest(): void
    {
        $_SESSION['smarty']->assign('test', 'test');
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}