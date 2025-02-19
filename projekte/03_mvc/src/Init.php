<?php

namespace mvc_third;

use AllowDynamicProperties;
use mvc_third\Library\ControllerFactory;
use mvc_third\Library\RequestHandler;

#[AllowDynamicProperties] class Init
{
    /**
     * @var RequestHandler
     */
    private RequestHandler $requestHandler;
    private ControllerFactory $controllerFactory;

    public function __construct()
    {
        // echo $_SERVER['REQUEST_URI'];
        $this->requestHandler = new RequestHandler($_SERVER);
        $controller = new ControllerFactory( __NAMESPACE__, $this->requestHandler);
        $controller = $controller->getController();
        $action = $this->requestHandler->getActionName() . 'Action';
        $controller->$action();
        $controllerName = $this->getActiveController();
        echo $controllerName;

    }
    public function getActiveController(): string{
        return $this->requestHandler->getControllerName();
    }

}