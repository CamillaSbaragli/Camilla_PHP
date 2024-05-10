<?php

$array=[10,20,30,40,50];

//calcolo la media//
function media($array){
    $somma=0;
    foreach($array as $value){
        $somma+=$value;
    }
    $risultato=$somma/count($array);

return $risultato;
}
$mediaFinale=media($array);
echo "la media è:$mediaFinale"."\n";

//cerco il valore massimo dell'arrey//
function maxNum($array){
    $max=$array[0];
    for($i=0;$i<count($array);$i++){
        if($array[$i]>$max){
            $max=$array[$i];
        }

    }
    return $max;
}
$massimo=maxNum($array);
echo "il massimo è: $massimo"."\n";


//calcoli la potenza
?>