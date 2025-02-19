<?php
namespace mvcFirst;

use mvcFirst\Foot\FootIndex;
use mvcFirst\Head\HeadIndex;
use mvcFirst\Views\Home\ViewHome;

require_once __DIR__ . '/config/config.php';
HeadIndex::getHead();
ViewHome::getHome();
FootIndex::getFoot();