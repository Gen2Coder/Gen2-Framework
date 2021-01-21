<?php

class Autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'loadClass'));
    }
    static function loadClass($class)
    {
        $folderClass = '../Framework/';
        $fileClass = str_replace('Gen2\\',  $folderClass, $class) . '.php';
        if (file_exists($fileClass)) {
            require_once $fileClass;
        } else {
            exit('Impossible de charger la classe : ' . $class);
        }
    }
}
