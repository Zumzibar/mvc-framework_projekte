<?php

namespace mvc_fifth\Controller\Reservierung;
use mvc_fifth\AbstractClass\Library\AController;
use mvc_fifth\Views\Reservierung\ViewReservierung;



class Controller extends AController
{

    /**
     * @return void
     * example: ViewImpressum::getImpressum(); oder ViewUeberUns::getUeberUns();
     */
    protected function getView(): void
    {
        ViewReservierung::getReservierung();
    }
}