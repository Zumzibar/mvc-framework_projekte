<?php

namespace mvc_sixth\Interfaces\Library;

use mvc_sixth\Library\RequestHandler;

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