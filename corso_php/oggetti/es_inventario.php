<?php

class Articolo{
private $articoli=[];
private $nome;
private $quantita;

public function __construct($nome,$quantita) {
    $this->nome = $nome;
    $this->quantita = $quantita;
}






public function dettagliArticolo() {
    return "nome:".$this->nome.", quantita:".$this->quantita;
}
}


$articolo1=new Articolo("nike",40);
$articolo2=new Articolo("adidas",30);
echo $articolo1->dettagliArticolo()."\n";
echo $articolo2->dettagliArticolo()."\n";