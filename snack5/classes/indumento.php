<?php

include_once __DIR__ . '/scarpa.php';
include_once __DIR__ . '/capello.php';

class Indumento {
    public $material;

    function __construct($_material){
        $this->material = $_material;
    }
};

