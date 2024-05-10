<?php
$punteggio=60;
$eta=20;

if($eta>18){
    if($punteggio>90){
        echo "ottimo lavoro,passi al livello successivo";
    } elseif($punteggio>75){
        echo "buon lavoro, livello intermedio";
    } else {
        echo "devi ancora migliorare";
    }
} else {
    echo "i corsi sono solo per maggiorenni";
}
?>