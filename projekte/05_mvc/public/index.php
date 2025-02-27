<?php
namespace mvc_fifth;

use mvc_fifth\Foot\FootIndex;
use mvc_fifth\Forms\Formular1;
use mvc_fifth\Head\HeadIndex;
use mvc_fifth\Library\RequestHandler;
use mvc_fifth\Navi\NaviIndex;
use mvc_fifth\Views\Home\ViewHome;

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