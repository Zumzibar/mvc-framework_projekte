<?php

namespace mvc_seventh\PHPFiles;

class testArrays
{
    public function __construct(){
        //$this->getTestArray();
    }
    public function getTestArray(): array{
        $data = array(
            array(
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'age' => 28,
                'country' => 'USA'
            ),
            array(
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'age' => 32,
                'country' => 'Canada'
            )
        );
        return $data;
    }

}