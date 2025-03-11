<?php

namespace mvc_seventh\Views\Schleifen;

use Smarty\Smarty;


class ViewSchleifen
{
    /**
     * @return void
     */
    static function getSchleifen(): void
    {
        //array, das in html ausgelesen werden soll via smarty
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
        $_SESSION['smarty'] = $smarty = new Smarty(); // neue smarty initialisieren
        $smarty->assign('people', $data); //$data als Variable people zuweisen
        $smarty->display(__DIR__ . '/index.tpl.html'); //index.tpl.html oeffnen

    }
}
