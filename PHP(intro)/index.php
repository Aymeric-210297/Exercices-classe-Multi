<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP(intro)</title>
</head>

<body>
    <?php
    // Étape 0

    echo '<p>Hello World</p>';

    // Étape 1

    for ($i = 1; $i <= 10; $i++) {
        echo "<p>Le nombre vaut $i</p>";
    }

    // Étape 2

    for ($i = 1; $i <= 10; $i++) {
        if ($i != 3) {
            echo "<p>Le nombre vaut $i</p>";
        }
    }

    // Étape 3

    for ($i = 1; $i <= 10; $i++) {
        if ($i < 4 || $i > 7) {
            echo "<p>Le nombre vaut $i</p>";
        }
    }

    // Étape 4

    echo '<p>La valeur absolute de -5 vaut ' . abs(-5) . '</p>';
    echo '<p>La valeur absolute de 10 vaut ' . abs(10) . '</p>';
    ?>
</body>

</html>
