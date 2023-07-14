<?php 
    $numMin = 2;
    $numMax = 40;

    $array=[];

    for ($i=$numMin; $i < $numMax ; $i++) { 
        array_push($array, $i);
    }

    var_dump($array);

    function customArraySlice($array, $numMin, $numMax){
        if ((count($array) < $numMax) || ($numMin > $numMax)){
            return false;
        } else {
            $newArray = [];

            for ($i=$numMin; $i < $numMax; $i++) { 
                $newArray = $array;
            }

            return $newArray;
        }
    }

    var_dump(customArraySlice([1,2,3,4,5,6,7,8,9], 2, 7));
?>