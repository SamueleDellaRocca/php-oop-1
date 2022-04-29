<?php

class movie
{
    private $titolo;
    private $regista;
    private $linguaOriginale;
    private $budget;
    private $starMovie;
    private $prezzoBiglietto;

    public function __construct($_titolo, $_regista, $_starMovie)
    {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->starMovie = $_starMovie;
    }
}
