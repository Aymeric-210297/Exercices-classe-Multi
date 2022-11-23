<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aymeric M. - PHP(intro)</title>
</head>
<body>
    <?php
        // Step 0

        echo '<p>Hello World</p>';

        // Step 1

        for($i = 1; $i <= 10; $i++) {
            echo "<p>Le nombre vaut $i</p>";
        }

        // Step 2

        for($i = 1; $i <= 10; $i++) {
            if ($i != 3) {
                echo "<p>Le nombre vaut $i</p>";
            }
        }

        // Step 3

        for($i = 1; $i <= 10; $i++) {
            if ($i < 4 || $i > 7) {
                echo "<p>Le nombre vaut $i</p>";
            }
        }

        // Step 4

        echo '<p>La valeur absolute de -5 vaut ' . abs(-5) . '</p>';
        echo '<p>La valeur absolute de 10 vaut ' . abs(10) . '</p>';
    ?>
</body>
</html>