<?php
namespace mvc_fourth\AbstractClass\Library;

use mvc_fourth\Interfaces\Library\IRequestHandler;

abstract class ARequestHandler implements IRequestHandler
{

    protected string $ControllerName;
    protected string $ActionName;

    protected array $uriParts = [];



    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $this->ControllerName;
    }

    /**
     * @return string
     */
    public function getActionName(): string
    {
        return $this->ActionName;
    }

    protected function checkIfUriPartsExists($parts): void
    {
        $this->ControllerName=$parts[1]??'home';
        $this->ActionName=$parts[3]??'index';
    }

    protected abstract function cutUriParts():array;

}