<?php
$resultat;
if (isset($_GET['montant'])) {
    $montant = $_GET['montant'];
    if (
        is_numeric($montant)
        && $montant >= 1
        && $montant <= 99999
    ) {
        $resultat = array();
        $resultat[500] = 0;
        $resultat[200] = 0;
        $resultat[100] = 0;
        $resultat[50] = 0;
        $resultat[20] = 0;
        $resultat[10] = 0;
        $resultat[5] = 0;

        $billets = array_keys($resultat);

        while ($montant >= $billets[sizeof($billets) - 1]) {
            for ($i = 0; $i < sizeof($billets); $i++) {
                $valeur = $billets[$i];
                if ($montant >= $valeur) {
                    $montant = $montant - $valeur;
                    $resultat[$valeur] = $resultat[$valeur] + 1;
                    break;
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP(probleme)</title>
</head>

<body>
    <form action=".">
        <div>
            <label for="montant">Montant en EUR.</label>
            <input type="number" name="montant" id="montant" required min="1" max="99999">
        </div>
        <button type="submit">Envoyer</button>
    </form>
    <?php if (isset($resultat)) : ?>
        <p>Billets:</p>
        <ul>
            <?php $billets = array_keys($resultat); ?>
            <?php for ($i = 0; $i < sizeof($billets); $i++) : ?>
                <?php if ($resultat[$billets[$i]] != 0) : ?>
                    <li><?= $billets[$i] ?> : <?= $resultat[$billets[$i]] ?></li>
                <?php endif ?>
            <?php endfor ?>
        </ul>
        <p>Il vous restera: <?= $montant ?></p>
    <?php endif ?>
</body>

</html>
