<?php

namespace mvc_fifth;

use AllowDynamicProperties;
use mvc_fifth\Exceptions\ControllerFactory\NoActionFound;
use mvc_fifth\Exceptions\ControllerFactory\NoControllerFound;
use mvc_fifth\Library\ControllerFactory;
use mvc_fifth\Library\RequestHandler;
use mvc_fifth\Controller\Exceptions\ControllerException;

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

    /**
     * @return string
     */
    // Methode, um den Namen des aktiven Controllers vom RequestHandler zu erhalten
    public function getActiveController(): string
    {
        return $this->requestHandler->getControllerName();
    }
    // Methode, um das Display einzurichten, indem ein Controller erstellt und die entsprechende Aktion aufgerufen wird

    /**
     * @return void
     */
    public function setDisplay() : void
    {
        try {
            $controller = new ControllerFactory(__NAMESPACE__, $this->requestHandler);// Erstelle eine neue ControllerFactory mit dem aktuellen Namespace und dem RequestHandler
            $controller = $controller->getController();// Hole die Controller-Instanz aus der Fabrik
            $action = $this->requestHandler->getActionName() . 'Action'; // Hole den Aktionsnamen vom RequestHandler und füge 'Action' hinzu
            $controller->$action(); // Rufe die Aktionsmethode beim Controller auf
        }
        catch(NoControllerFound $noControllerFound){
            //require_once __DIR__ . '/Controller/Exceptions/ControllerException/Controller.php';
            //$this->Controller->getView();
            require_once __DIR__ . '/Views/Exceptions/ControllerException/index.tpl.php';
        }
        catch(NoActionFound $noActionFound){
            require_once __DIR__ . '/Views/Exceptions/ActionException/index.tpl.php';
        }
    }

    /**
     * @return string mit getControllerName
     * requestHandler zu getControllerName
     */
    public function getControllerName2(): string
    {
        if (!defined('CONTROLLERNAME')) {
            define('CONTROLLERNAME', $this->requestHandler->getControllerName());
        }
        return CONTROLLERNAME;
    }

    /**
     * @return string
     */
    public function getControllerName() : string
    {
        return $this->requestHandler->getControllerName();
    }

}