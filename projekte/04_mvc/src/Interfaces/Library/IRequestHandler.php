<?php
namespace mvc_fourth\Interfaces\Library;

interface IRequestHandler{

    public function __construct(array $serverVariablen);


    /**
     * @return string
     */
    public function getControllerName(): string;


    /**
     * @return string
     */
    public function getActionName(): string;

}