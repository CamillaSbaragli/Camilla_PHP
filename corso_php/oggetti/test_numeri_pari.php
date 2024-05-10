<?php

$array1=[2,3,4];


function numPari($array1){
    $arrayPari=[];
    foreach ($array1 as $value) {
        if($value%2== 0){
            $arrayPari[]=$value;
        }
    }
    return $arrayPari;
}

$risultato=numPari($array1);
foreach ($risultato as $value) {
    echo $value. " ";
}
?>