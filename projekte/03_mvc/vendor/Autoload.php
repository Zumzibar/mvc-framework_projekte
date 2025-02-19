<?php
readonly class Autoload
{
    /**
     * @var array|mixed
     */
    private array $jsonconf;


    public function __construct()
    {
        $this->jsonconf = json_decode(file_get_contents(__DIR__ . '/composer.json'),true); //Laden von json und Umwandeln in Array
        if (!empty($this->jsonconf)) {
            spl_autoload_register(function (string $className) {
                $className = str_replace($this->jsonconf['namespace'] . '\\', '', $className);
                $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
                foreach ($this->jsonconf['dirs'] as $dir) {
                    $filename = dirname(__DIR__,). '/' . $dir . $className . '.php';
                    if (file_exists($filename)) {
                        require_once($filename);
                        return;
                    }
                }

            });
        } else {
            echo 'Bitte einen Namespace angeben!';
        }
        /*echo '<pre>';
        print_r($this->jsonconf);*/
    }
}

new Autoload();