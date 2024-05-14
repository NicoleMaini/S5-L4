<?php

include_once __DIR__ . '/MaterialeBibliotecario.php';

class DVD extends MaterialeBibliotecario
{
    public $regista;

    function __construct($titolo, $annoPubblicazione, $regista)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->regista = $regista;
    }

    public function presta()
    {
        parent::presta();
        echo "Attualmente disponibile <br>";
    }
    public function restituisci()
    {
        parent::restituisci();
        echo "Attualmente non disponibile <br>";
    }
}
