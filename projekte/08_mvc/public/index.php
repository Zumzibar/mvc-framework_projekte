<?php
namespace mvc_eighth;

use mvc_eighth\Foot\FootIndex;
use mvc_eighth\Head\HeadIndex;

use mvc_eighth\Navi\NaviIndex;
use Smarty\Smarty;


require_once __DIR__ . '/config/config.php';

$_SESSION['smarty'] = $smarty = new Smarty();
$init = new Init();
HeadIndex::getHead($init, $smarty);
NaviIndex::getNavi($init, $smarty);
$init->setDisplay($smarty);
FootIndex::getFoot($smarty);
