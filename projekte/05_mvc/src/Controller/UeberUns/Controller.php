<?php

namespace mvc_fifth\Controller\UeberUns;
use mvc_fifth\AbstractClass\Library\AController;
use mvc_fifth\Views\UeberUns\ViewUeberUns;



class Controller extends AController
{


    /**
     * @return void
     */
    final function getView():void
    {
      ViewUeberUns::getUeberUns();
    }
}