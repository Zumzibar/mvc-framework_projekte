<?php

namespace mvc_fourth\Controller\Impressum;
use mvc_fourth\Views\Impressum\ViewImpressum;



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