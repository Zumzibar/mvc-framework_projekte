<?php

namespace mvc_third\Controller\Reservierung;
use mvc_third\Views\Reservierung\ViewReservierung;



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