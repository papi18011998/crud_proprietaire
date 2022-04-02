<?php

namespace libs;

use libs\View;




class Controller
{
    protected $view;
    public function __construct()
    {
        $this->view = new View();
     
    }
}
