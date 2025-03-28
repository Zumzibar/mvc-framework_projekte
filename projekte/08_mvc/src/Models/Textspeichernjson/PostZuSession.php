<?php

namespace mvc_eighth\Models\Textspeichernjson;

use mvc_eighth\Library\AnzeigeTool;

class PostZuSession
{
    public array $postDataArray = array();
    function __construct($postData){


        $this->saveSession();

    }

    /**
     * @return void
     * POST Daten in extra Array speichern
     */
    public function saveSession()
    {
        if (!empty($_POST)) {
            foreach ($_POST as $key => $value) {

                $postDataArray[$key] =  $value;
            }
        }
        AnzeigeTool::printr($postDataArray);
    }


    protected function AnzeigeInput()
    {

        if(!empty($postDataArray)){
            AnzeigeTool::printr($postDataArray);
            file_put_contents(DOCUMENTROOT .'TestJSON' , json_encode($postDataArray, JSON_PRETTY_PRINT));
        }
    }



    public function convertSession(){

    }
    public function killPostSession(){
        unset($_SESSION['formular_daten']);
    }

}