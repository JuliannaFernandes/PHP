<?php

$array = [];

for ($i = 0; $i < 30; $i++) {
    array_push($array, $i);
}


function arrayMaiorQurSete($array) {
    $arrayRetorno = [];
    for($j = 0; $j < count($array); $j++) {
       if($array[$j] > 7) {
           array_push($arrayRetorno, $array[$j]);
       }
    }

    return $arrayRetorno;
}

$novoArray = arrayMaiorQurSete($array);

print_r($novoArray);

?>