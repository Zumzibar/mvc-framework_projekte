<?php

namespace mvc_third\Controller\UeberUns;
use mvc_third\Views\UeberUns\ViewUeberUns;



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