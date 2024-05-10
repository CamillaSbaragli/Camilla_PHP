<?php

class Cinema {
    private $films= [];
    public function __construct() {
        $this->films = [];
    }
    public function aggiungiFilm($titolo,$posti){
        //this->films[0] = $titolo;

           array_push($this->films, $titolo,$posti); //GIUSTO
    }
    
    public function mostraPrenotazioni(){
        foreach($this->films as $value){
        echo $value."\n";
        }
    }
}

$cinemaAstoria=new Cinema(); //nostro oggetto creato grazie alla classe cinema//
$cinemaAstoria->aggiungiFilm("titanic",100);
$cinemaAstoria->aggiungiFilm("harrypotter",50);
echo $cinemaAstoria->mostraPrenotazioni();





?>