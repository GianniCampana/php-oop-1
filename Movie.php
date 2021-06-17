<?php

class Movie
{
    public $titolo;
    public $genere;
    public $durata;
    public $voto;
    public $anno;

    public function __construct($_titolo, $_genere, $_durata)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;

    }

    public function getInfo(){
        return "Titolo: ".$this->titolo."/ Genere: ".$this->genere."/ Durata: ".$this->durata;
    }
}
?>

