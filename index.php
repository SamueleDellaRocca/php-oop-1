<?php

class Movie
{
    private $titolo;
    private $regista;
    private $linguaOriginale;
    private $budget;
    private $starMovie;
    private $prezzoBiglietto;

    public function __construct($_titolo, $_regista, $_starMovie, $_prezzoBiglietto)
    {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->starMovie = $_starMovie;
        $this->prezzoBiglietto = $_prezzoBiglietto;
    }

    public function getTitolo()
    {
        return $this->titolo;
    }

    public function getRegista()
    {
        return $this->regista;
    }

    public function getStarMovie()
    {
        return $this->starMovie;
    }

    public function setPrezzoBiglietto($_prezzoBiglietto)
    {
        $this->prezzoBiglietto = $_prezzoBiglietto;
    }

    public function getPrezzoBiglietto()
    {
        return $this->prezzoBiglietto;
    }
}

$movieInterstellar = new Movie('Interstellar', 'Nolan', 'Matthew Mcconaughey', 10);
var_dump($movieInterstellar);
