<?php
namespace mvc_seventh;

use mvc_seventh\Foot\FootIndex;
use mvc_seventh\Head\HeadIndex;

use mvc_seventh\Navi\NaviIndex;
use Smarty\Smarty;


require_once __DIR__ . '/config/config.php';

$_SESSION['smarty'] = $smarty = new Smarty();
$init = new Init();
HeadIndex::getHead($init, $smarty);
NaviIndex::getNavi($init, $smarty);
$init->setDisplay($smarty);
FootIndex::getFoot($smarty);
