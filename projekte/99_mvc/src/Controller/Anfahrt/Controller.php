<?php

namespace mvc_ninetynine\Controller\Anfahrt;
use mvc_ninetynine\Views\Anfahrt\ViewAnfahrt;



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
      ViewAnfahrt::getAnfahrt();
    }
}