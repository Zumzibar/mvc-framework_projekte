<?php

namespace mvc_fifth\Controller\Anfahrt;

use mvc_fifth\AbstractClass\Library\AController;
use mvc_fifth\Views\Anfahrt\ViewAnfahrt;


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