<?php

namespace mvc_eighth\Models\Textspeichernjson;

class PostZuSession
{

    function __construct($postData){
        if (!empty($postData)) {
            $this->saveSession();
        } else {
            echo 'Das Absenden der Daten war nicht erfolgreich.';
        }
    }


    public function saveSession()
    {
        foreach ($_POST as $key => $value) {
            if ($key !== 'senden' && $key !== 'speichern') {

                $_SESSION['formular_daten'][$key] = htmlspecialchars(ucfirst($value));
            }


        }

    }
    public function killPostSession(){
        unset($_SESSION['formular_daten']);
    }

}