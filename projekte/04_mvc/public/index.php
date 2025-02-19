<?php
namespace mvc_fourth;

use mvc_fourth\Foot\FootIndex;
use mvc_fourth\Forms\Formular1;
use mvc_fourth\Head\HeadIndex;
use mvc_fourth\Library\RequestHandler;
use mvc_fourth\Navi\NaviIndex;
use mvc_fourth\Views\Home\ViewHome;

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