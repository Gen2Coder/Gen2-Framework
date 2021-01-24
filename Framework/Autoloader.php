<?php

class Autoloader
{
    private $dirClass;
    private $nameSpace;

    public function __construct($dirClass, $nameSpace)
    {
        $this->dirClass = $dirClass;
        $this->nameSpace = $nameSpace;
    }

    public function register()
    {
        spl_autoload_register(array(__CLASS__, 'loadClass'));
    }
    private function loadClass($class)
    {
        $fileClass = str_replace($this->nameSpace,  $this->dirClass, $class) . '.php';
        if (file_exists($fileClass)) {
            require_once $fileClass;
        } else {
            exit('Impossible de charger la classe : ' . $class);
        }
    }
}
