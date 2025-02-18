<?php

namespace mvc_second\Library;

class RequestHandler
{
    private string $ControllerName;
    private string $ActionName;
    /**
     * @var array $uriParts
     */
    private array $uriParts = [];

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
    private function cutUriParts():array
    {
        $pattern = '/^\/([^\/]+)(\/([^\/]+))?/i';
        preg_match($pattern, $this->serverVariablen['REQUEST_URI'], $matches);
        return $matches;
    }
    /**
     * @return void
     */
    private function checkIfUriPartsExists($parts): void
    {
        $this->ControllerName=$parts[1]??'Home';
        $this->ActionName=$parts[3]??'index';
    }

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
}