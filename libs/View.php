<?php

namespace libs;
class View
{
    public function __construct()
    {
     
    }
    public function load()
    {
        $num_agrs = func_num_args();
        $args = func_get_args();
        
        switch ($num_agrs) {
            case 1:
                $file ='src/view/'.$args[0].'.php';
                echo $file;
                if (file_exists($file)) {
                    require_once $file;
                } else {
                    die('Le fichier '.$file.' n\'existe pas');
                }
                break;
            case 2:
                $file ='src/view/'.$args[0].'.php';
                if (file_exists($file)) {
                    $data = $args[1];
                    require_once $file;
                } else {
                    die('Le fichier '.$file.' n\'existe pas');
                }
                break;
            default:
                $view = $args[0];
                $data = array();
                break;
        }
    }

}
