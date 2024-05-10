<?php
$eta=17;
$weekend=true;


if($eta>=18 && !$weekend){
    echo "costo del biglietto:10euro";
}elseif($eta>=18 && $weekend){
    echo "costo del biglietto:8euro";
} elseif($eta>=12 && $eta<=17 && !$weekend){
    echo "costo del biglietto:5euro";
} elseif($eta>=12 && $eta<=17 && $weekend){
    echo "costo del biglietto:3euro";
} else {
    echo "il biglietto è gratuito";
}
?>


