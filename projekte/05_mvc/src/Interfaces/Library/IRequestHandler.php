<?php
namespace mvc_fifth\Interfaces\Library;

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