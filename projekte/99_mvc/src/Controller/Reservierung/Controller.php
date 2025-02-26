<?php

namespace mvc_ninetynine\Controller\Reservierung;
use mvc_ninetynine\Views\Reservierung\ViewReservierung;



class Controller
{
    /**
     * @return void
     */
    public function indexAction():void
    {
        $this->getView();
    }

    /**
     * @return void
     */
    private function getView():void
    {
      ViewReservierung::getReservierung();
    }
}