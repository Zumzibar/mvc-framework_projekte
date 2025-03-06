<?php

namespace mvc_fifth\Library;


use AllowDynamicProperties;
use mvc_fifth\AbstractClass\Library\AControllerFactory;
use mvc_fifth\Exceptions\ControllerFactory\NoControllerFound;
use mvc_fifth\Exceptions\ControllerFactory\NoActionFound;
use mvc_sixth\Exceptions\ControllerFactory\NotFoundAction;

class ControllerFactory extends AControllerFactory
{


    /**
     * @param string $namenspace
     * @param RequestHandler $requestHandler
     */
    public function __construct( public string $namenspace,  public RequestHandler $requestHandler)
    {
        $this->buildControllerWithNamespace();
        $this->buildControllerPath();
        $this->checkIfActionExists();
        $this->checkIfControllerExists();
        $this->loadController();
    }

    /**
     * @return void
     */
    final function buildControllerWithNamespace(): void
    {
        $this->controllerName = "\\" . $this->namenspace . "\\Controller\\" . ucfirst($this->requestHandler->getControllerName()) . "\\Controller";
        //echo $actionInput = "\\" . $this->namenspace . '\\Views\\' . ucfirst($this->requestHandler->getControllerName()) . '\\' . 'index.tpl.html';
    }

    /**
     * @return void
     */
    final function loadController(): void
    {
        $this->controllerObject = new $this->controllerName();
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
     * @throws NoActionFound
     * @throws NoControllerFound
     * ruft die Exceptions
     */
    protected function buildControllerPath(): void
    {
        $this->controllerPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . ucfirst($this->requestHandler->getControllerName()) . DIRECTORY_SEPARATOR . 'Controller.php';
    }

    /**
     * @return bool
     * checkt, ob Pfad fuer Controller existiert
     */
    protected function checkIfControllerExists():  void
    {
        //echo $this->controllerPath;
        if(!file_exists($this->controllerPath)){
           // echo 'Fehler';
            throw new NoControllerFound('Fehler');
        }
    }

    /**
     * @return bool
     */
    protected function checkIfActionExists(): void
    {
        if (!method_exists($this->controllerObject, $this->requestHandler->getActionName() . 'Action')) {
            throw new NotFoundAction($this->requestHandler->getActionName() . ' Action not found im Controller ' . $this->requestHandler->getControllerName());
        }
    }
}