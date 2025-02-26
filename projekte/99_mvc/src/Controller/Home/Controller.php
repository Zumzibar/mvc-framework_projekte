<?php

namespace mvc_ninetynine\Controller\Home;

use mvc_ninetynine\Views\Home\ViewHome;


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