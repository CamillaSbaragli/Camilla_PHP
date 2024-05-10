<?php
function matematica($a,$b){
    $somma=$a+$b;
    $divisione=$a/$b;
    $moltiplicazione=$a*$b;
    $differenza=$a-$b;
    return array($somma,$divisione,$moltiplicazione,$differenza);
}

$risultato=matematica(20,2);
$sommaTotale=0;

foreach($risultato as $value){
    $sommaTotale+=$value;
    echo "il risultato delle singole operazioni è: $value"."\n";
    
}

echo "il risultato totale è: $sommaTotale";

?>
