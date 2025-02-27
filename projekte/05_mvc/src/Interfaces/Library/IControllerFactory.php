<?php
namespace mvc_fifth\Interfaces\Library;

use mvc_fifth\Library\RequestHandler;

interface IControllerFactory{

    public function __construct(string $namenspace, RequestHandler $requestHandler);

    public function getController(): object;

}
