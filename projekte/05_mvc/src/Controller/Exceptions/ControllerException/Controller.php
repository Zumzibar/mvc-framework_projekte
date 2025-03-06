<?php

namespace mvc_fifth\Controller\Exceptions\ControllerException;

use mvc_fifth\AbstractClass\Library\AController;
use mvc_fifth\Views\Exceptions\ControllerException\ViewControllerException;

class Controller
{
    /**
     * @return void
     * example: ViewImpressum::getImpressum(); oder ViewUeberUns::getUeberUns();
     */
    protected function getView(): void
    {
        echo "zweiter Test";
        ViewControllerException::getControllerException();
    }
}