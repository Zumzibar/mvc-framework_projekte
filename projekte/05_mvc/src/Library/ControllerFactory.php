<?php

namespace mvc_fifth\Library;


use AllowDynamicProperties;
use mvc_fifth\AbstractClass\Library\AControllerFactory;


class ControllerFactory extends AControllerFactory
{


    /**
     * @param string $namenspace
     * @param RequestHandler $requestHandler
     */
    public function __construct( public string $namenspace,  public RequestHandler $requestHandler)
    {
        $this->buildControllerWithNamespace();
        $this->loadController();
    }

    /**
     * @return void
     */
    final function buildControllerWithNamespace(): void
    {
        $this->controllerName = "\\" . $this->namenspace . "\\Controller\\" . ucfirst($this->requestHandler->getControllerName()) . "\\Controller";
    }

    /**
     * @return void
     */
    final function loadController(): void
    {
        $this->controllerObject = new $this->controllerName();
        // print_r($this->controllerObject);
    }

    /**
     * @return object
     */
    public function getController(): object
    {
        return $this->controllerObject;
    }
}