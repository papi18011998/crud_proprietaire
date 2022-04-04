<?php

namespace libs;
class Bootstrap
{
    public function __construct()
    {
        if (isset($_GET['url'])) {
            $url = explode('/',$_GET['url']);
            $controller_file = 'src/controller/' . $url[0] . 'Controller.php';
            // conntroller
            if (file_exists($controller_file)){
               require_once $controller_file;
                $file = ucfirst($url[0]).'Controller';
                $controller = new $file();
                // parametre
                if (isset($url[2])) {
            
                    if (method_exists($controller, $url[1])) {
                        $methode = $url[1];
                        $controller->$methode($url[2]);
                    }else{
                        echo 'La methode n\'existe pas';
                    }
                }
                // action
                if (isset($url[1])) {
                   if (method_exists($controller, $url[1])) {
                       $methode = $url[1];
                       $controller->$methode();
                   }else{
                       echo 'La methode n\'existe pas';
                   }
                }else{
                    $controller->index();
                }

            }else{
                die('Le controller n\'existe pas');
            }
        }else{
            echo '<h1>Welcome to  my MVC Framework</h1>';
        }
    }
}
