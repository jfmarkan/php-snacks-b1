<?php 

    $letters = ['a','b','c','d','e'];
    $numbers = [1,2,3,4,5];

    var_dump($letters, $numbers);

    $result = [];

    for ($i=0; $i < count($letters) ; $i++) { 
       array_push($result, $letters[$i], $numbers[$i]);
    }

    var_dump($result);
?>