<?php
$kWh=250;
$costo_base=0.20;
$abitazione="residenziale";//o commerciale//
$weekend=true;

if($abitazione=="residenziale" && $weekend){
    echo "il costo è $kWh*$costo_base*0.15";
} elseif($abitazione== "residenziale" && !$weekend){}