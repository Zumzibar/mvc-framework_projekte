<?php

namespace mvc_eighth\Controllers\Textspeichernjson;

use mvc_eighth\AbstractClass\Controller\AController;
use mvc_eighth\Models\Textspeichernjson\PostZuSession;
use mvc_eighth\Models\Textspeichernjson\SpeichernDatensatz;
use mvc_eighth\Views\Textspeichernjson\Kontaktformular\ViewKontaktformular;


class Controller extends AController
{
    protected function getView(): void
    {
        ViewKontaktformular::getKontaktformular();
    }

    protected function sendAction(): string{
        $link = $this->requestHandler->getActionName();
        return $link;
    }


}