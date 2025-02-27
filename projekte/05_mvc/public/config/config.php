<?php
declare(strict_types=1);

use mvc_fifth\Library\JsonReader\TemplateJson\ReadTemplateInfoJson;

date_default_timezone_set('Europe/Amsterdam');
const NL = '<br>';
const PRE = '<pre>';
const UPRE = '</pre>';

define('DOCUMENTROOT',dirname(__DIR__).'/');
define('LINUXROOT',dirname(__DIR__,2).'/');
require_once LINUXROOT.'vendor/Autoload.php';
new ReadTemplateInfoJson();