<?php

$files = scandir(__DIR__);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercices class Multi</title>
</head>

<body>
  <h1>Exercices class Multi</h1>
  <ul>
    <?php foreach ($files as $file) : ?>
      <?php if (is_dir($file) && $file != '.' && $file != '..' && $file != '.git') : ?>
        <li>
          <a href="<?= $file ?>"><?= $file ?></a>
        </li>
      <?php endif ?>
    <?php endforeach ?>
    </ol>
</body>

</html>
