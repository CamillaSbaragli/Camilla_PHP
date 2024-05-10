<?php
$eta=19;
$array=[];
do{
    if($eta>=18){
        array_push($array,"maggiorenne");
    }else{
         array_push($array,"minorenne");
    }

    }while(empty($array));
    echo ($array[0]);

    
?>