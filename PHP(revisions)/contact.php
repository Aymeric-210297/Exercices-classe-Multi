<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PHP(revisions)/styles/index.css">
    <title>PHP(revisions) [Formulaire de contact]</title>
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/PHP(revisions)/includes/menu.php' ?>
    <main>
        <h1>Animalerie Tom&Co</h1>
        <form action="">
            <fieldset>
                <legend>Formulaire de contact</legend>
                <div>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" required>
                </div>
                <div>
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="telephone">Numéro de téléphone</label>
                    <input type="tel" name="telephone" id="telephone" required>
                </div>
                <div>
                    <label for="message">Votre message</label>
                    <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                </div>
                <button type="submit">Soumettre</button>
            </fieldset>
        </form>
    </main>
</body>

</html>
