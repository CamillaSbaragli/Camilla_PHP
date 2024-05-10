<?php

class Automobile {
    public $marca;
    public $modello;
    public function __construct($marca, $modello) {
        $this->marca = $marca;
        $this->modello = $modello;
}

public function dettagliAuto() {

    return "Marca:".$this->marca.",Modello:".$this->modello;
}
}

//creazione istanza automobile//
$auto=new Automobile("Fiat","500");
$auto2=new Automobile("alfaromeo","giulietta");
echo $auto->dettagliAuto()."\n";
echo $auto2->dettagliAuto()."\n";

?>