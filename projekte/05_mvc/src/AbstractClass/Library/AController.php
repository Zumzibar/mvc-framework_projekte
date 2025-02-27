<?php
namespace mvc_fifth\AbstractClass\Library;

abstract class AController
{
    /**
     * @return void
     */
    final public function indexAction():void
    {
        $this->getView();
    }

    /**
     * @return void
     * example: ViewImpressum::getImpressum(); oder ViewUeberUns::getUeberUns();
     */
    abstract protected function getView():void;
}