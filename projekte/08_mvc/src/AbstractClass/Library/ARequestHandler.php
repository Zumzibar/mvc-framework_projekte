<?php

namespace mvc_eighth\AbstractClass\Library;

use mvc_eighth\Interfaces\Library\IRequestHandler;

abstract class ARequestHandler implements IRequestHandler
{
    /**
     * @var string $controllerName
     */
    protected string $controllerName;
    /**
     * @var string $actionName
     */
    protected string $actionName;
    /**
     * @return array
     * $pattern = '/^\/([^\/]+)(\/([^\/]+))?/i';
     */
    abstract protected function cutUriParts(): array;
    /**
     * @param $matches
     * @return void
     */
    abstract protected function checkIfUriPartsExists($matches): void;

    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $this->controllerName;
    }

    /**
     * @return string
     */
    public function getActionName(): string
    {
        return $this->actionName;
    }
}