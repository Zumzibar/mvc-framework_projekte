<?php
namespace mvc_second;

use mvc_second\Foot\FootIndex;
use mvc_second\Forms\Formular1;
use mvc_second\Head\HeadIndex;
use mvc_second\Library\RequestHandler;
use mvc_second\Navi\NaviIndex;
use mvc_second\Views\Home\ViewHome;

require_once __DIR__ . '/config/config.php';
HeadIndex::getHead();
NaviIndex::getNavi();
new Init();
FootIndex::getFoot();

/*echo PRE;
print_r($_GET);
$test = new RequestHandler($_GET['REQUEST_URI']);
print_r($test);*/