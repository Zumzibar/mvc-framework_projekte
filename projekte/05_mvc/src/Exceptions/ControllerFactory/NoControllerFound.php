<?php

namespace mvc_fifth\Exceptions\ControllerFactory;
use Exception;
use Throwable;
//use mysql_xdevapi\Exception;
date_default_timezone_set('Europe/Berlin');
class NoControllerFound extends \Exception
{
    public function __construct($message = "", $code = 0, \Exception $previous = null){
        //$message = 'Fehler: No Controller found.';
        parent::__construct($message, $code, $previous);
        file_put_contents(__DIR__ . '/logs/extrem.log', date('d.F Y -H:i:s') . parent::getTraceAsString() . "\n", FILE_APPEND);
    }
}