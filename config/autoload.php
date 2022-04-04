<?php
class Autoload
{
    public static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    public static function autoload($class)
    {
        if (file_exists('src/model' . $class . '.php')) {
            require_once 'src/model/'.$class.'.php';
        }
        elseif (file_exists('src/controller' . $class . '.php')) {
            require_once 'src/controller/'.$class.'.php';
        }
        elseif(file_exists(str_replace('\\','/',$class.'.php'))) {
            require_once str_replace('\\','/',$class.'.php');
        }
    }
}