<?php

class Movie
{
    private $titolo;
    private $regista;
    private $linguaOriginale;
    private $budget;
    private $starMovie;
    private $prezzoBiglietto;
    private $cambioPrezzo = 0;

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

    public function getlinguaOriginale()
    {
        return $this->linguaOriginale;
    }

    public function setlinguaOriginale($_linguaOriginale)
    {
        $this->linguaOriginale = $_linguaOriginale;
    }

    public function getBudget()
    {
        return $this->budget;
    }

    public function setBudget($_budget)
    {
        $this->budget = $_budget;
    }

    public function getStarMovie()
    {
        return $this->starMovie;
    }

    public function setPrezzoBiglietto($_prezzoBiglietto)
    {
        $this->prezzoBiglietto = $_prezzoBiglietto;
        $this->cambioPrezzo++;
    }

    public function getPrezzoBiglietto()
    {
        return $this->prezzoBiglietto;
    }
}

$movieInterstellar = new Movie('Interstellar', 'Nolan', 'Matthew Mcconaughey', 10);
$movieInterstellar->setPrezzoBiglietto(12);
$movieInterstellar->setPrezzoBiglietto(8);
$movieInterstellar->setPrezzoBiglietto(9);
var_dump($movieInterstellar);

$movieBatMan = new Movie('BatMan', 'Nolan', 'Cristian Bale', 12);
$movieBatMan->setLinguaOriginale('Inglese');
$movieBatMan->setBudget('3 milioni');
var_dump($movieBatMan);
