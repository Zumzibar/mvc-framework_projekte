<?php

namespace mvc_eighth\Views\Test\TestUnterordner2;

class ViewTest
{
    /**
     * @return void
     */
    static function getTest(): void
    {
        $_SESSION['smarty']->assign('test', __DIR__ .'/TestUnterordner/index.tpl.html');
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}