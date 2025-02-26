<?php
namespace mvc_ninetynine;

use mvc_ninetynine\Foot\FootIndex;
use mvc_ninetynine\Forms\Formular1;
use mvc_ninetynine\Head\HeadIndex;
use mvc_ninetynine\Library\RequestHandler;
use mvc_ninetynine\Navi\NaviIndex;
use mvc_ninetynine\Views\Home\ViewHome;

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