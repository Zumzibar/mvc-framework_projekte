<?php

namespace mvc_fourth\Controller\UeberUns;
use mvc_fourth\Views\UeberUns\ViewUeberUns;



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
      ViewUeberUns::getUeberUns();
    }
}