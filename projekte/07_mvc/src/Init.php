<?php

namespace mvc_seventh;


use mvc_seventh\Exceptions\ControllerFactory\NotFoundAction;
use mvc_seventh\Exceptions\ControllerFactory\NotFoundController;
use mvc_seventh\Library\AnzeigeTool;
use mvc_seventh\Library\ControllerFactory;
use mvc_seventh\Library\RequestHandler;
use mvc_seventh\Views\Meldung\ViewMeldung;

class Init
{
    /**
     * @var RequestHandler
     */
    private RequestHandler $requestHandler;

    /**
     *
     */
    public function __construct()
    {
        /*echo PRE;
         print_r($_SERVER);
         echo $_SERVER['REQUEST_URI'];*/
        $this->requestHandler = new RequestHandler($_SERVER);

    }

    /**
     * @return void
     */
    public function setDisplay(): void
    {
        try {
            $controller = new ControllerFactory(__NAMESPACE__, $this->requestHandler);
            $controller = $controller->getController();
            $action = $this->requestHandler->getActionName() . 'Action';
            $controller->$action();
        } catch (NotFoundController|NotFoundAction $controller) {
            #echo $controller->getMessage();
            ViewMeldung::getMeldung($controller->getMessage());
        }
    }

    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $this->requestHandler->getControllerName();
    }
}