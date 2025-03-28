<?php

namespace mvc_eighth\Views\Textspeichernjson\Kontaktformular;


use mvc_eighth\Models\Textspeichernjson\PostZuSession;
use mvc_eighth\Models\Textspeichernjson\SpeichernDatensatz;
use Smarty\Smarty;

class ViewKontaktformular
{
    /**
     * @return void
     */
    static function getKontaktformular(): void
    {

        $SpeichernDatensatz = new SpeichernDatensatz();
        $_SESSION['speicherndatensatz'] = $SpeichernDatensatz;

        self::getPost();

        $_SESSION['smarty']->assign('Field', KONTAKTFORMULARJSON['nameArray']);
        $_SESSION['smarty']->assign('ExtraArrays', [
            'sportart' => KONTAKTFORMULARJSON['sportart'],
            'verein' => KONTAKTFORMULARJSON['verein'],
            'laender' => KONTAKTFORMULARJSON['laender'],
            'name' => KONTAKTFORMULARJSON['name']
        ]);
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }




    protected static function getPost(){
        $PostZuSession = new PostZuSession($_POST);
        //$_SESSION['smarty']->assign('SavePost', $PostZuSession->saveSession());
    }
}
