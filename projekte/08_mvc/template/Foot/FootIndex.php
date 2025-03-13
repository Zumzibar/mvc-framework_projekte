<?php

namespace mvc_eighth\Foot;

class FootIndex
{
    /**
     * @return void
     */
    static public function getFoot($smarty): void
    {
        $smarty->display(__DIR__ . '/index.tpl.html');
    }
}