<?php

include_once __DIR__ . '/MaterialeBibliotecario.php';

class Libro extends MaterialeBibliotecario
{
    public $autore;
    static public $contatoreLibri = 0;

    function __construct($titolo, $annoPubblicazione, $autore)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->autore = $autore;
        self::$contatoreLibri++;
    }

    public function contaLibri()
    {
        return parent::$contatoreMateriali - self::$contatoreLibri;
    }
}
