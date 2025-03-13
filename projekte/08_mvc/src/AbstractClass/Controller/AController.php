<?php

namespace mvc_eighth\AbstractClass\Controller;

use mvc_eighth\Interfaces\Controller\IController;
use mvc_eighth\Library\RequestHandler;

abstract class AController implements IController
{
    /**
     * Cannot override final method AController->__construct()
     */
    final public function __construct(protected RequestHandler $requestHandler){}

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
    protected function getView():void
    {
        $controllerName = $this->requestHandler->getControllerName();
        $parts = explode("\\", __NAMESPACE__);
        $className = $parts[0] ."\\Views\\" . $controllerName. "\\View" . $controllerName;
        $getBereich = "get" . $controllerName;
        $className::$getBereich();
    }
}