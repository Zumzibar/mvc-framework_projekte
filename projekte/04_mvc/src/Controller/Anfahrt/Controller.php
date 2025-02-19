<?php

namespace mvc_fourth\Controller\Anfahrt;
use mvc_fourth\Views\Anfahrt\ViewAnfahrt;



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