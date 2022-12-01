<?php
    $resultat;
    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['montant'])) {
        $resultat = [];
        $montant = $_POST['montant'];

        $billets = [500, 200, 100, 50, 20, 10, 5];

        while ($montant >= 5) {
            for ($i=0; $i < sizeof($billets) - 1; $i++) {
                $valeur = $billets[$i];
                if ($montant >= $valeur) {
                    $montant = $montant - $valeur;
                    array_push($resultat, $valeur);
                    break;
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diviser un montant</title>
</head>
<body>
    <form action="./" method="POST">
        <div>
            <label for="montant">Montant en EUR.</label>
            <input type="number" name="montant" id="montant">
        </div>
        <button type="submit">Envoyer</button>
    </form>
    <?php if (isset($resultat)): ?>
        <p>Résultat: <?= implode(", ", $resultat) ?></p>
        <p>Reste: <?= $montant ?></p>
    <?php endif ?>
</body>
</html>