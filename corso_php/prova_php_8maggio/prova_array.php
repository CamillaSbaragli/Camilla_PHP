<?php
$array1=[1,4,10,6];
$array2=[2,9,7,11];

//stampo l'array con foreach//
foreach( $array1 as $value ) {
    echo "value:$value\n";
}

//ordino un array//
sort($array1);
print_r($array1);

//provo ad unirli//
$unisciArray=array_merge($array1,$array2);
echo "array ordinato";
print_r($unisciArray);
?>