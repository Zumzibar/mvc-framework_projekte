<?php

namespace mvc_eighth\Views\Meldung;

class ViewMeldung
{
    /**
     * @param string|array $meldung
     * @param string $link
     * @return void
     * @noinspection PhpUnusedParameterInspection
     */
    static function getMeldung(string|array $meldung, string $link='/'): void
    {
        require_once __DIR__ . '/index.tpl.php';
    }
}