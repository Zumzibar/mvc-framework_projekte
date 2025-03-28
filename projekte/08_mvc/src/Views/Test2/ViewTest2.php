<?php

namespace mvc_eighth\Views\Test2;

class ViewTest2
{
    /**
     * @return void
     */
    static function getTest2(): void
    {
        //$_SESSION['smarty']->assign('Field', array_values(KONTAKTFORMULARJSON));
        //$_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');

        //$_SESSION['smarty']->assign('Field', KONTAKTFORMULARJSON['indexArray']);
        $_SESSION['smarty']->assign('Field', KONTAKTFORMULARJSON['nameArray']);
        $_SESSION['smarty']->assign('ExtraArrays', [
            'sportart' => KONTAKTFORMULARJSON['sportart'],
            'verein' => KONTAKTFORMULARJSON['verein'],
            'laender' => KONTAKTFORMULARJSON['laender'],
            'nameArray' => KONTAKTFORMULARJSON['nameArray']
        ]);
        $_SESSION['smarty']->display(__DIR__ . '/index.tpl.html');
    }
}