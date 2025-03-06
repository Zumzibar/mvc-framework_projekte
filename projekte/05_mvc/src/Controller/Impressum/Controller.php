<?php

namespace mvc_fifth\Controller\Impressum;
use mvc_fifth\AbstractClass\Library\AController;
use mvc_fifth\Views\Impressum\ViewImpressum;



class Controller extends AController
{

    /**
     * @return void
     * example: ViewImpressum::getImpressum(); oder ViewUeberUns::getUeberUns();
     */
    protected function getView(): void
    {
        ViewImpressum::getImpressum();
    }
}