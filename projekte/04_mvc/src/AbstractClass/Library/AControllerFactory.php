<?php
namespace mvc_fourth\AbstractClass\Library;

use mvc_fourth\Interfaces\Library\IControllerFactory;
use mvc_fourth\Library\RequestHandler;

abstract class AControllerFactory implements IControllerFactory
{
    /**
     * @var string $controllerName
     */
    protected string $controllerName;
    /**
     * @var object $controllerObject
     */
    protected object $controllerObject;
    protected abstract function loadController(): void;



    /**
     * @param string $namenspace
     * @param object $requestHandler
     */
    //public function __construct(string $namenspace, RequestHandler $requestHandler)
    //{
    //}

    /**
     * @return void
     */
    abstract protected function buildControllerWithNamespace(): void;

    /**
     * @return object
     */
    abstract public function getController(): object;

}