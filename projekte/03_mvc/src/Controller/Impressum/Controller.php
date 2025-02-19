<?php

namespace mvc_third\Controller\Impressum;
use mvc_third\Views\Impressum\ViewImpressum;



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