<?php

include __DIR__ . '/classes/MaterialeBibliotecario.php';
include __DIR__ . '/classes/Libro.php';
include __DIR__ . '/classes/DVD.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Prestito Bibliotecario</h1>
    <h4>Disponibili al prestito:</h4>
    <h4>Libri</h4>
    <?php
    $libro1 = new Libro('Così parlò Zarathustra. Ediz. integrale', 2020, 'Friedrich Nietzsche');
    $libro1->presta();
    $libro1->contaLibri();
    $libro2 = new Libro('Delitto e castigo. Ediz. integrale', 2019, 'Fëdor Dostoevskij');
    $libro2->restituisci();
    $libro3 = new Libro('I fiori del male. Ediz. integrale', 2018, 'Charles Baudelaire');
    $libro3->presta();
    $DVD1 = new Libro('Bohemian Rhapsody', 2019, 'Brian Singer');
    $DVD1->restituisci();
    $DVD2 = new Libro('La fabbrica di cioccolato', 2011, 'Tim Burton');
    $DVD2->presta();
    $DVD3 = new Libro('Parasite', 2020, 'Bong Joon Ho');
    $DVD3->presta();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>