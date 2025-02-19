<?php

namespace mvc_second\Controller\Home;

use mvc_second\Views\Home\ViewHome;


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