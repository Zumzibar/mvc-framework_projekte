<?php
namespace mvc_fourth\Interfaces\Library;

use mvc_fourth\Library\RequestHandler;

interface IControllerFactory{

    public function __construct(string $namenspace, RequestHandler $requestHandler);

    public function getController(): object;

}
