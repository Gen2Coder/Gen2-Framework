<?php

class Autoloader
{
    private $dirClass;
    private $namespace;

    public function __construct($dirClass, $namespace)
    {
        $this->dirClass = $dirClass;
        $this->namespace = $namespace;
    }

    public function register()
    {
        spl_autoload_register(array(__CLASS__, 'loadClass'));
    }
    private function loadClass($class)
    {
        $fileClass = str_replace($this->namespace,  $this->dirClass, $class) . '.php';
        if (file_exists($fileClass)) {
            require_once $fileClass;
        } else {
            exit('Impossible de charger la classe : ' . $class);
        }
    }
}
