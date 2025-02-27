<?php

namespace mvc_fourth\Library;

use mvc_fourth\AbstractClass\Library\ARequestHandler;

class RequestHandler extends ARequestHandler
{
    /**
     * @param array $serverVariablen
     */
    public function __construct(private array $serverVariablen)
    {
        $this->checkIfUriPartsExists($this->cutUriParts());
    }

    /**
     * @return array
     */
    protected function cutUriParts():array
    {
        $pattern = '/^\/([^\/]+)(\/([^\/]+))?/i';
        preg_match($pattern, $this->serverVariablen['REQUEST_URI'], $matches);
        return $matches;
    }
}