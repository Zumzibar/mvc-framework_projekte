<?php

namespace mvc_ninetynine\Controller\UeberUns;
use mvc_ninetynine\Views\UeberUns\ViewUeberUns;



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