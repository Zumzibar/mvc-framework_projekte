<?php

namespace mvc_seventh\Interfaces\Library;

use mvc_seventh\Library\RequestHandler;

interface IControllerFactory
{
    /**
     * @param string $namespace
     * @param RequestHandler $requestHandler
     */
    public function __construct(string $namespace, RequestHandler $requestHandler);

    /**
     * @return object
     */
    public function getController(): object;
}