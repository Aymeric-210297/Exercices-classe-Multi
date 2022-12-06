<?php

function TriangleRectangle($C1, $C2, $C3, &$Message) {
    $Pg; $Cote2; $Cote3;

    if (($C1 >= $C2) && ($C1 >= $C3)) {
        $Pg = $C1;
        $Cote2 = $C2;
        $Cote3 = $C3;
    } else {
        if (($C2 >= $C1) && ($C2 >= $C3)) {
            $Pg = $C2;
            $Cote2 = $C1;
            $Cote3 = $C3;
        } else {
            $Pg = $C3;
            $Cote2 = $C1;
            $Cote3 = $C2;
        }
    }

    if ($Pg < $Cote2 + $Cote3) {
        if ($Pg*$Pg == $Cote2*$Cote2 + $Cote3*$Cote3) {
            if ($Cote2 == $Cote3) {
                $Message = "Triangle rectangle isocèle";
            } else {
                $Message = "Triangle rectangle";
            }
        } else {
            $Message = "Le triangle n'est pas rectangle";
        }
    } else {
        $Message = "Ces dimensions ne peuvent être celles d'un triangle";
    }
}

function ChercheDiviseurs($nb, &$diviseurs) {
    $i = 1;
    $diviseurs = "";
    // Pour avoir la même chose que l'affichage il faut retirer le "=" de la boucle while.
    while ($i <= $nb) {
        if ($nb % $i == 0) {
            $diviseurs = $diviseurs . strval($i) . " ";
        }
        $i = $i + 1;
    }
}

$diviseurs_affichage;
ChercheDiviseurs(725, $diviseurs_affichage);

$rectangle_affichage;
TriangleRectangle(3, 4, 5, $rectangle_affichage);

$chiffres = "254896";
$voyelle_consonne = "kayak";

$voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction</title>
    <link rel="stylesheet" href="CSS/menu.css">
    <link rel="stylesheet" href="CSS/pied_de_page.css">
    <link rel="stylesheet" href="CSS/fonction.css">
    <link rel="stylesheet" href="CSS/global.css">
</head>
<body>
    <?php include("includes/menu.php") ?>
    <main>
        <div>
            <div class="titre">
                <h2>Affichage avec des fonctions PHP</h2>
            </div>
            <div class="flex">
                <div>
                    <h3>Trouver les diviseurs d'un nombre</h3>
                    <p><?= $diviseurs_affichage ?></p>
                </div>
                <div>
                    <h3>Est-ce un triangle rectangle et lequel.</h3>
                    <p><?= $rectangle_affichage ?></p>
                </div>
            </div>
        </div>
        <div>
            <div class="titre">
                <h2>Affichage sans fonctions PHP</h2>
            </div>
            <div class="flex">
                <div>
                    <h3>Changer un nombre par un autre</h3>
                    <ul>
                        <?php for ($i=0; $i < strlen($chiffres); $i++): ?>
                            <?php $valeur = intval($chiffres[$i]) ?>
                            <?php if($valeur < 5): ?>
                                <li><?= $valeur + 2 ?></li>
                            <?php else: ?>
                                <li><?= $valeur + 3 ?></li>
                            <?php endif ?>
                        <?php endfor ?>
                    </ul>
                </div>
                <div>
                    <h3>Remplacer les voyelles et consonnes</h3>
                    <ul>
                        <?php for ($i=0; $i < strlen($voyelle_consonne); $i++): ?>
                            <?php if(in_array($voyelle_consonne[$i], $voyelles)): ?>
                                <li>1</li>
                            <?php else: ?>
                                <li>0</li>
                            <?php endif ?>
                        <?php endfor ?>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <?php include("includes/pied_de_page.php") ?>
</body>
</html>