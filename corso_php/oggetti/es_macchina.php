<?php
class  Macchina{

private $stato;

public function attiva(){
    $this->stato = true;
}
public function disattiva(){
    $this->stato = false;
}

public function produci(){
   if( $this->stato==true ){
   echo "la macchina è attiva:ha prodotto un articolo"."\n";

}else{
    echo "errore,la macchina non è attiva"."\n";
}
}
public function getMacchina(){
    return $this->stato;
}
}

$macchinaOperativa = new Macchina();

$macchinaOperativa->produci();
echo $macchinaOperativa->getMacchina() ."\n";




