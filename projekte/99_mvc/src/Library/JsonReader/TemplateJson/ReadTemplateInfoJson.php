<?php

namespace mvc_ninetynine\Library\JsonReader\TemplateJson;

class ReadTemplateInfoJson
{
    private array $templateInfoJson = array();


    public function __construct()
    {
        $this->templateInfoJson = json_decode(file_get_contents(__DIR__ . "/templateInfo.json"), true);
        define('TEMPLATEINFOJSON', $this->templateInfoJson);
    }


/*    public function getTemplateInfo(): array{
        return $this->templateInfoJson;
    }*/





}