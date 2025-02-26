<?php

namespace mvc_ninetynine\Controller\Kreis;
use mvc_ninetynine\Views\Kreis\ViewKreis;



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
        ViewKreis::getKreis();
    }
}