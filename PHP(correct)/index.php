<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP(correct)</title>
</head>

<body>
    <div>
        <h2>Étape 1</h2>
        <p>Hello World</p>
    </div>
    <div>
        <h2>Étape 2</h2>
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <p>Le nombre vaut <?= $i ?></p>
        <?php endfor ?>
    </div>
    <div>
        <h2>Étape 3</h2>
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <?php if ($i != 3) : ?>
                <p>Le nombre vaut <?= $i ?></p>
            <?php endif ?>
        <?php endfor ?>
    </div>
    <div>
        <h2>Étape 4</h2>
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <?php if ($i < 4 || $i > 7) : ?>
                <p>Le nombre vaut <?= $i ?></p>
            <?php endif ?>
        <?php endfor ?>
    </div>
    <div>
        <h2>Étape 5</h2>
        <p>La valeur absolute de -5 vaut <?= abs(-5) ?></p>
        <p>La valeur absolute de 10 vaut <?= abs(10) ?></p>
    </div>
</body>

</html>
