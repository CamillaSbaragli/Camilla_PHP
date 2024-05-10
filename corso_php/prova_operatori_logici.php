<?php
$eta=20;
$haPatente=true;
$residenza="italia";

/*if($eta>=18 && $haPatente && $residenza=="italia") {
    echo "puoi guidare in italia";
} elseif($eta>=18 && !$haPatente){
    echo "non puoi guidare";
} else {
    echo "non soddisfi i requisiti per guidare";
}
?>*/

if($eta>=18 || $haPatente){
    echo "sei maggiorenne";
} else {
echo "non sei maggiorenne";

}
?>