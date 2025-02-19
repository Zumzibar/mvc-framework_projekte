<?php

namespace mvc_second\Controller\UeberUns;
use mvc_second\Views\UeberUns\ViewUeberUns;



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