<?php

namespace mvc_ninetynine;

use AllowDynamicProperties;
use mvc_ninetynine\Library\ControllerFactory;
use mvc_ninetynine\Library\RequestHandler;

#[AllowDynamicProperties] class Init
{
    /**
     * @var RequestHandler
     */
    private RequestHandler $requestHandler;
    //private ControllerFactory $controllerFactory;

    // Konstruktor initialisiert den RequestHandler mit den Servervariablen
    public function __construct()
    {
        // echo $_SERVER['REQUEST_URI'];
        $this->requestHandler = new RequestHandler($_SERVER); //
    }

    // Methode, um den Namen des aktiven Controllers vom RequestHandler zu erhalten
    public function getActiveController(): string
    {
        return $this->requestHandler->getControllerName();
    }
    // Methode, um das Display einzurichten, indem ein Controller erstellt und die entsprechende Aktion aufgerufen wird
    public function setDisplay()
    {
        // Erstelle eine neue ControllerFactory mit dem aktuellen Namespace und dem RequestHandler
        $controller = new ControllerFactory(__NAMESPACE__, $this->requestHandler);

        // Hole die Controller-Instanz aus der Fabrik
        $controller = $controller->getController();

        // Hole den Aktionsnamen vom RequestHandler und füge 'Action' hinzu
        $action = $this->requestHandler->getActionName() . 'Action'; //

        // Rufe die Aktionsmethode beim Controller auf
        $controller->$action(); //
    }
}