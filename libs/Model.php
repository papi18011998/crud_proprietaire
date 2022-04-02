<?php

namespace libs;
class Model
{
    protected $entityManager;

    public function __construct()
    {
        require_once 'bootstrap.php';
        $this->entityManager = $entityManager;
    }
}
