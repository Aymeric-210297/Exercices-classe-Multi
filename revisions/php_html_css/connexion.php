<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/index.css">
    <title>Formulaire de connexion</title>
</head>
<body>
    <?php include('includes/navbar.php') ?>
    <main>
        <h1>Connexion plateforme</h1>
        <form action="">
            <fieldset>
                <legend>Formulaire de connexion</legend>
                <div>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom">
                </div>
                <div>
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="motdepasse">Mot de passe</label>
                    <input type="password" name="motdepasse" id="motdepasse">
                </div>
                <div>
                    <label for="robot">Je ne suis pas un robot</label>
                    <input type="checkbox" name="robot" id="robot">
                </div>
                <button type="submit">Connexion</button>
            </fieldset>
        </form>
    </main>
</body>
</html>