<?php

class Scarpa extends Indumento{
    public $color;

    function __construct($_material, $_color){
        parent::__construct($_material);
        $this->color = $_color;
    }
}


?>