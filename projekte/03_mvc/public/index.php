<?php
namespace mvc_third;

use mvc_third\Foot\FootIndex;
use mvc_third\Forms\Formular1;
use mvc_third\Head\HeadIndex;
use mvc_third\Library\RequestHandler;
use mvc_third\Navi\NaviIndex;
use mvc_third\Views\Home\ViewHome;

require_once __DIR__ . '/config/config.php';


$init = new Init();
HeadIndex::getHead($init);
NaviIndex::getNavi($init);
$init->setDisplay();
FootIndex::getFoot();





/*$init = new Init();
$title = TEMPLATEINFOJSON[$init->getActiveController()]['title'];
echo PRE;
print_r(TEMPLATEINFOJSON[$init->getActiveController()]['title']);*/

/*echo PRE;
print_r($_GET);
$test = new RequestHandler($_GET['REQUEST_URI']);
print_r($test);*/