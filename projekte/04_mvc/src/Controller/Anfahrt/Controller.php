<?php

namespace mvc_fourth\Controller\Anfahrt;
use mvc_fourth\AbstractClass\Library\AController;
use mvc_fourth\Views\Anfahrt\ViewAnfahrt;



class Controller extends AController
{


    /**
     * @return void
     * example: ViewImpressum::getImpressum(); oder ViewUeberUns::getUeberUns();
     */
    protected function getView(): void
    {
        ViewAnfahrt::getAnfahrt();
    }
}