<?php

include_once __DIR__ . '/MaterialeBibliotecario.php';

class Libro extends MaterialeBibliotecario
{
    static public $contatoreMateriali = 0;
    public $autore;

    // la funzione costruttore si usa quando si devono riunire tutti i campi da passare come parametri
    function __construct($titolo, $annoPubblicazione, $autore)
    {
        // qua ci riportiamo le variabili che ci serve inserire
        parent::__construct($titolo, $annoPubblicazione);
        $this->autore = $autore;
        self::$contatoreMateriali++;
    }

    public function contaLibri()
    {
        echo self::$contatoreMateriali;
    }
}
