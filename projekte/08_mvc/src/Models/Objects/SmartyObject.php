<?php

namespace mvc_eighth\Models\Objects;

class SmartyObject
{
    /**
     * @var string $name
     */
    public string $name = 'Maurer';
    /**
     * @var string $vorname
     */
    public string $vorname = 'Sven';

    /**
     * @return string
     */
    public function getGeburtsdatum():string
    {
        return '25.05.1985';
    }

    /**
     * @return string[]
     */
    public function getNameArray():array
    {
        return array('Maurer', 'Lorenz', 'Heldt','Grätzer');
    }
}