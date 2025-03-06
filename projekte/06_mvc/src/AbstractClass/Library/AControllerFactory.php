<?php

namespace mvc_sixth\AbstractClass\Library;

use mvc_sixth\Interfaces\Library\IControllerFactory;

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
    /**
     * @var string
     */
    protected string $controllerPath;
    /**
     * @return void
     * #mvc_sixth\Controllers\Home\Controller;
     */
    abstract protected function buildControllerNameWithNamespace(): void;

    /**
     * @return void
     */
    abstract protected function loadController(): void;

    /**
     * @return void
     */
    abstract protected function buildControllerPath(): void;

    /**
     * @return void
     */
    abstract protected function checkIfControllerExists(): void;
    /**
     * @return void
     */
    abstract protected function checkIfActionExists(): void;
}