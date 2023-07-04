<?php 
    $numMin = 4;
    $numMax = 8;

    $array=[];

    for ($i=$numMin; $i < $numMax ; $i++) { 
        array_push($array, $i);
    }

    var_dump($array);
?>