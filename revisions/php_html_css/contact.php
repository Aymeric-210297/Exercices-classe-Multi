<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
</head>
<body>
    <main>
        <form action="">
            <fieldset>
                <legend>Formulaire de contact</legend>
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
                    <label for="telephone">Numéro de téléphone</label>
                    <input type="tel" name="telephone" id="telephone">
                </div>
                <div>
                    <label for="message">Votre message</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
            </fieldset>
            <button type="submit">Soumettre</button>
        </form>
    </main>
</body>
</html>