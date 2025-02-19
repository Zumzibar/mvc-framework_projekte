<?php

namespace mvc_fourth\Controller\Home;

use mvc_fourth\Views\Home\ViewHome;


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
        ViewHome::getHome();
    }
}