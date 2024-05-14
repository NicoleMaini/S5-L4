<?php

include __DIR__ . '/classes/MaterialeBibliotecario.php';
include __DIR__ . '/classes/Libro.php';
include __DIR__ . '/classes/DVD.php';

// creiamo libri e dvd

$libro1 = new Libro('Così parlò Zarathustra. Ediz. integrale', 2020, 'Friedrich Nietzsche');
$libro1->titolo = 'Così parlò Zarathustra. Ediz. integrale';
$libro1->annoPubblicazione = 2020;
$libro1->autore = 'Friedrich Nietzsche';

$libro2 = new Libro('Delitto e castigo. Ediz. integrale', 2019, 'Fëdor Dostoevskij');
$libro2->titolo = 'Delitto e castigo. Ediz. integrale';
$libro2->annoPubblicazione = 2019;
$libro2->autore = 'Fëdor Dostoevskij';

$libro3 = new Libro('I fiori del male. Ediz. integrale', 2018, 'Charles Baudelaire');
$libro3->titolo = 'I fiori del male. Ediz. integrale';
$libro3->annoPubblicazione = 2018;
$libro3->autore = 'Charles Baudelaire';

$DVD1 = new DVD('Bohemian Rhapsody', 2019, 'Brian Singer');
$DVD1->titolo = 'Bohemian Rhapsody';
$DVD1->annoPubblicazione = 2019;
$DVD1->regista = 'Brian Singer';

$DVD2 = new DVD('La fabbrica di cioccolato', 2011, 'Tim Burton');
$DVD2->titolo = 'La fabbrica di cioccolato';
$DVD2->annoPubblicazione = 2011;
$DVD2->regista = 'Tim Burton';

$DVD3 = new DVD('Parasite', 2020, 'Bong Joon Ho');
$DVD3->titolo = 'Parasite';
$DVD3->annoPubblicazione = 2020;
$DVD3->regista = 'Bong Joon Ho';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="text-center">
    <h1 class="my-5">Prestito Bibliotecario</h1>
    <h4>Disponibili al prestito: <?= MaterialeBibliotecario::$contatoreMateriali ?></h4>


    <h4>Libri</h4>
    <p><?= $libro1->titolo ?>, <?= $libro1->autore ?>, <?= $libro1->annoPubblicazione ?></p>
    <p><?= $libro2->titolo ?>, <?= $libro2->autore ?>, <?= $libro2->annoPubblicazione ?></p>
    <p><?= $libro3->titolo ?>, <?= $libro3->autore ?>, <?= $libro3->annoPubblicazione ?></p>
    <h4>Libri disponibili al prestito: <?= Libro::$contatoreMateriali ?></h4>


    <h4>DVD</h4>
    <p><?= $DVD1->titolo ?>, <?= $DVD1->regista ?>, <?= $DVD1->annoPubblicazione ?></p>
    <p><?= $DVD2->titolo ?>, <?= $DVD2->regista ?>, <?= $DVD1->annoPubblicazione ?></p>
    <p><?= $DVD3->titolo ?>, <?= $DVD3->regista ?>, <?= $DVD3->annoPubblicazione ?></p>
    <h4>DVD disponibili al prestito: <?= DVD::$contatoreMateriali ?></h4>


    <?php
    $libro1->presta();
    $DVD1->presta();
    $DVD2->presta();
    $libro1->restituisci()
    ?>
    <h4>Disponibili al prestito: <?= MaterialeBibliotecario::$contatoreMateriali ?></h4>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>