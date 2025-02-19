<?php

namespace mvc_third\Controller\Anfahrt;
use mvc_third\Views\Anfahrt\ViewAnfahrt;



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