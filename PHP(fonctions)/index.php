<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP(fonctions)</title>
</head>

<body>
    <?php
    function facto($number)
    {
        $counter = 1;
        for ($i = 1; $i <= $number; $i++) {
            $counter = $counter * $i;
        }
        return $counter;
    }

    function occurenceTexte($texte, $caractere)
    {
        $counter = 0;
        for ($i = 0; $i < strlen($texte); $i++) {
            if ($texte[$i] == $caractere) {
                $counter++;
            }
        }
        return $counter;
    }
    ?>

    <div>
        <h2>Première fonction</h2>
        <p>Factorielle de 7: <?= facto(7) ?></p>
    </div>

    <div>
        <h2>Deuxième fonction</h2>
        <p>Nombre de fois "a" dans "aaaaaaaaba": <?= occurenceTexte("aaaaaaaaba", "a") ?></p>
    </div>
</body>

</html>
