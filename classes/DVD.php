<?php

include_once __DIR__ . '/MaterialeBibliotecario.php';

class DVD extends MaterialeBibliotecario
{
    // dobbiammo essere in grado di maneggiarlo, ma dobiamo impedire agli altri di cambiarla inavvertitamente
    static public $contatoreMateriali = 0;
    public $regista;

    function __construct($titolo, $annoPubblicazione, $regista)
    {
        parent::__construct($titolo, $annoPubblicazione);
        $this->regista = $regista;
        self::$contatoreMateriali++;
    }

    public function contaDVD()
    {
        echo self::$contatoreMateriali;
    }
}
