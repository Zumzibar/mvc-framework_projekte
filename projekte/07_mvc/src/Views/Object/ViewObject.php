<?php

namespace mvc_seventh\Views\Object;

class ViewObject
{
    /**
     * @return void
     */
    static function getObject(): void
    {
        require_once __DIR__ . '/index.tpl.html';
    }
}