<?php
declare(strict_types=1);

use mvc_eighth\Library\EinlesenJson\EinlesenJson;

date_default_timezone_set('Europe/Berlin');
const NL = '<br>';
const PRE='<pre>';
const UPRE='</pre>';

define('DOCUMENTROOT',dirname(__DIR__).'/');
define('LINUXROOT',dirname(__DIR__,2).'/');

require_once LINUXROOT . '/vendor/Autoload.php';
EinlesenJson::setConstTemplateJson();



