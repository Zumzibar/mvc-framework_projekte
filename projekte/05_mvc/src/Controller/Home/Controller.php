<?php

namespace mvc_fifth\Controller\Home;

use mvc_fifth\AbstractClass\Library\AController;
use mvc_fifth\Views\Home\ViewHome;


class Controller extends AController
{


    /**
     * @return void
     * example: ViewImpressum::getImpressum(); oder ViewUeberUns::getUeberUns();
     */
    protected function getView(): void
    {
        ViewHome::getHome();
    }
}