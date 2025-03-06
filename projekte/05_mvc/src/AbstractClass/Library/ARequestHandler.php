<?php
namespace mvc_fifth\AbstractClass\Library;

use mvc_fifth\Interfaces\Library\IRequestHandler;

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
    public abstract function getActionName(): string;


    protected function checkIfUriPartsExists($parts): void
    {
        $this->ControllerName=$parts[1]??'home';
        $this->ActionName=$parts[3]??'index';
    }

    protected abstract function cutUriParts():array;

}