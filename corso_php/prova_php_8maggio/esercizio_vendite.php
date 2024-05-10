<?php
$array1=["paperino","giocattolo",10];
$array2=["barbie","giocattolo",40];
$array3=["macchinina","giocattolo",30];
$array4=["harryPotter","libro",20];
$array5=["le favole","libro",15];

//array generale//
$vendite=[$array1,$array2,$array3,$array4,$array5];
$sommaGiocattoli=0;
$sommaLibri=0;

foreach($vendite as $value){
    if($value[1]==="giocattolo"){
        $sommaGiocattoli+=$value[2];
    } else{
        $sommaLibri+=$value[2];
    }
}

echo "il costo totale dei giocattoli è: $sommaGiocattoli\n";
echo "il costo totale dei libri è: $sommaLibri\n";
?>

