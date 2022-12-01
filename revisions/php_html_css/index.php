<?php

function algorithmeEuclide2($nbr1, $nbr2) {
    $reste = $nbr2;
    while ($reste != 0) {
        $reste = $nbr1 % $nbr2;
        $nbr1 = $nbr2;
        $nbr2 = $reste;
    }
    return $nbr1;
}

function special($nombreDepart, $nombreElementsSouhaite) {
    $suite = "" . $nombreDepart . " ";
    for ($i = 0; $i < $nombreElementsSouhaite; $i++) { 
        if (($nombreDepart < 5) && ($nombreDepart % 3 != 0)) {
            $nombreDepart = $nombreDepart * 5;
        } else {
            if (($nombreDepart > 5) && ($nombreDepart < 10)) {
                $nombreDepart = $nombreDepart / 6;
            } else {
                $nombreDepart = $nombreDepart * $nombreDepart;
            }
        }
        $suite = $suite . $nombreDepart . " ";
    }
    return $suite;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/index.css">
    <title>Accueil</title>
</head>
<body>
    <?php include('includes/navbar.php') ?>
    <main>
        <h1>Animalerie Tom&Co</h1>
        <div>
            <h2>Je veux des belles fonctions php (séparer analyse et affichage dans votre fichier)</h2>
            <p>Voici une suite bien spéciale : <?= special(5, 10) ?></p>
            <br />
            <p>Le PGCD entre 21 et 15 vaut <?= algorithmeEuclide2(21, 15) ?></p>
        </div>
        <div>
            <h2>Montrer moi comment afficher proprement du code</h2>
            <p>Dans la variable $tableau, voici les nombres pairs</p>
            <ul>
                <li>8</li>
                <li>10</li>
                <li>48</li>
            </ul>
            <p>Dans la variable $phrase "Bonjour a tous pour ces révisions". La dernière lettre de chaque mot est</p>
            <ul>
                <li>TODO!</li>
            </ul>
        </div>
    </main>
</body>
</html>