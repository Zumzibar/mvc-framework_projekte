<?php

namespace mvc_ninetynine\Controller\Impressum;
use mvc_ninetynine\Views\Impressum\ViewImpressum;



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
      ViewImpressum::getImpressum();
    }
}