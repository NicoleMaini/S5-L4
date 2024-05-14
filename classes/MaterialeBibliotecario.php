<?php

include_once __DIR__ . '/../interfaces/Prestito.php';

abstract class MaterialeBibliotecario implements Prestito
{
    static public $contatoreMateriali = 0;

    public $titolo = "Title";
    public $annoPubblicazione = "Year";

    function __construct($titolo, $annoPubblicazione)
    {
        $this->titolo = $titolo;
        $this->annoPubblicazione = $annoPubblicazione;
        self::$contatoreMateriali++;
    }
    public function presta()
    {
        if (self::$contatoreMateriali > 0) {
            echo self::$contatoreMateriali--;
        } else {
            echo self::$contatoreMateriali;
        }
    }
    public function restituisci()
    {
        echo self::$contatoreMateriali++;
    }
}
