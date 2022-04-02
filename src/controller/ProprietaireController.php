<?php
namespace src\controller;

use libs\Controller;
class ProprietaireController extends Controller
{
    public function index()
    {
        $this->view->load('proprietaires/index');
    }
    public function add()
    {
        $this->view->load('proprietaires/add');
    }
}

