<?php

namespace mvc_sixth\Library\EinlesenJson;

class EinlesenJson
{
    /**
     * @return void
     */
    static function setConstTemplateJson(): void
    {
        define('TEMPLATEINFOJSON', json_decode(file_get_contents(__DIR__ . '/templateInfo.json'), true));
    }
}