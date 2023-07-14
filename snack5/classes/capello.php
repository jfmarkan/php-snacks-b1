<?php

class Capello extends Indumento{
    public $diameter;

    function __construct($_material, $_diameter){
        parent::__construct($_material);
        $this->diameter = $_diameter;
    }
}

?>