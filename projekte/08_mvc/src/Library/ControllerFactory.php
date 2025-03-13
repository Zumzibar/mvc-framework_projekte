<?php

namespace mvc_eighth\Library;


use mvc_eighth\AbstractClass\Library\AControllerFactory;
use mvc_eighth\Exceptions\ControllerFactory\NotFoundAction;
use mvc_eighth\Exceptions\ControllerFactory\NotFoundController;

class ControllerFactory extends AControllerFactory
{

    /**
     * @return void
     * #mvc_eighth\Controllers\Home\Controller;
     */
    protected function buildControllerNameWithNamespace(): void
    {
        #mvc_eighth\Controllers\Impressum\Controller
        $this->controllerName = '\\' . $this->namespace . '\\Controllers\\' . ucfirst($this->requestHandler->getControllerName()) . '\\Controller';
    }

    /**
     * @return void
     */
    protected function loadController(): void
    {
        $this->controllerObject = new $this->controllerName($this->requestHandler);
    }

    /**
     * @param string $namespace
     * @param RequestHandler $requestHandler
     * @throws NotFoundAction
     * @throws NotFoundController
     */
    public function __construct(private readonly string $namespace, private readonly RequestHandler $requestHandler)
    {
        $this->buildControllerNameWithNamespace();
        $this->buildControllerPath();
        $this->checkIfControllerExists();
        $this->loadController();
        //$this->checkIfActionExists();
    }

    /**
     * @return object
     */
    public function getController(): object
    {
        return $this->controllerObject;
    }

    /**
     * @return void
     */
    protected function buildControllerPath(): void
    {
        //LINUXROOT/src/Controller/Home/Controller.php
        //echo LINUXROOT.'src/Controllers/'.ucfirst($this->requestHandler->getControllerName()).'/Controller.php';
        //echo dirname(__DIR__,1).'/Controllers/'.ucfirst($this->requestHandler->getControllerName()).'/Controller.php';
        $this->controllerPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR . ucfirst($this->requestHandler->getControllerName()) . DIRECTORY_SEPARATOR . 'Controller.php';
    }

    /**
     * @return void
     * @throws NotFoundController
     */
    protected function checkIfControllerExists(): void
    {
        if (!file_exists($this->controllerPath)) {
           throw new NotFoundController($this->requestHandler->getControllerName() . '- Controller not found');
        }
    }

    /**
     * @return void
     * @throws NotFoundAction
     */
    protected function checkIfActionExists(): void
    {
        if (!method_exists($this->controllerObject, $this->requestHandler->getActionName() . 'Action')) {
            throw new NotFoundAction($this->requestHandler->getActionName() . ' Action not found im Controller ' . $this->requestHandler->getControllerName());
        }
    }
}