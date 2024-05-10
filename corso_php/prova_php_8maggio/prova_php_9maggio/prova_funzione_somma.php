<?php
/*function somma($a,$b){
    return $a + $b;
}

$risultato=somma(10,2);
echo $risultato;*/

/*function differenza($c,$d){
    return $c - $d;
}

$risultatoDiff=differenza(8,4);
echo $risultatoDiff;*/



//funzione con doppio return//
function matematica($a,$b){
    $somma=$a+$b;
    $differenza=$a-$b;
    return array($somma,$differenza);
}

$risultato=matematica(10,2);
echo $risultato[0]. "\n";


echo $risultato[1]. "\n";
?>