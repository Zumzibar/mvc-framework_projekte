<?php

namespace mvc_seventh\Library;

use mvc_seventh\AbstractClass\Library\ARequestHandler;

class RequestHandler extends ARequestHandler
{
    /**
     * @param array $serverVariablen
     */
    public function __construct(protected array $serverVariablen)
    {
        $this->checkIfUriPartsExists($this->cutUriParts());
    }

    /**
     * @return array
     * $pattern = '/^\/([^\/]+)(\/([^\/]+))?/i';
     */
    protected function cutUriParts(): array
    {
        $pattern = '/^\/([^\/]+)(\/([^\/]+))?/i';
        preg_match($pattern, $this->serverVariablen['REQUEST_URI'], $matches);
        return $matches;
    }

    /**
     * @param $matches
     * @return void
     */
    protected function checkIfUriPartsExists($matches): void
    {
        /* [0] => /anfahrt/senden
      [1] => anfahrt
      [2] => /senden
      [3] => senden*/
        $this->controllerName = $matches[1] ?? 'Home';
        $this->actionName = $matches[3] ?? 'index';
    }
}