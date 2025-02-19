<?php

namespace mvc_second\Library;


use mvc_second\Controller\Home\Controller; // Beispiel für einen Standard-Controller

class ControllerFactory
{
    private string $controllerName;
    private object $controllerObject;

    public function __construct(private string $namenspace, private RequestHandler $requestHandler)
    {
        $this->buildControllerWithNamespace();
        $this->loadController();
    }

    private function buildControllerWithNamespace(): void
    {
        $this->controllerName = "\\" . $this->namenspace . "\\Controller\\" . ucfirst($this->requestHandler->getControllerName()) . "\\Controller";
    }

    private function loadController(): void
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