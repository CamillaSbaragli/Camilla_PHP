<?php

$stringa1 = "ciao";
$stringa2 = "come stai?";

$numeroControllo = 3;

if ($numeroControllo % 2 == 0) {
    $risultato = $stringa1 . $stringa2;
} else {
    $risultato = $stringa2 . $stringa1;

}
echo $risultato . "\n";

?>