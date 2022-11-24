<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form2</title>
</head>
<body>
    <h1>Un super formulaire</h1>
    <form action="" method="">
        <fieldset>
            <legend>Données personnlles</legend>
            <div>
                <label for="prenom">Votre prénom</label>
                <input type="text" id="prenom">
            </div>
            <div>
                <label for="nom">Votre nom</label>
                <input type="text" id="nom">
            </div>
            <div>
                <label for="date">Votre date de naissance</label>
                <input type="date" id="date">
            </div>
        </fieldset>
        <fieldset>
            <legend>Les nouveaux inuput</legend>
            <div>
                <label for="url">Votre URL</label>
                <input type="text" id="url">
            </div>
            <div>
                <label  for="telephone">Votre numéro de téléphone</label>
                <input type="tel" id="telephone">
            </div>
            <div>
                <label for="appreciation">Votre appréciation (entre 10 et 20)</label>
                <input type="range" id="appreciation">
            </div>
            <div>
                <label for="couleur">Votre couleur préférée</label>
                <input type="color" id="couleur">
            </div>
            <div>
                <label for="recherche">Votre recherche</label>
                <input type="search" id="recherche">
            </div>
            <div>
                <label for="fichier">Choisir un fichier</label>
                <input type="file" id="fichier">
            </div>
            <div>
                <label for="heure">Choisir une heure</label>
                <input type="time" id="heure">
            </div>
            <div>
                <label for="mois">Choisir un mois</label>
                <input type="month" id="mois">
            </div>
            <div>
                <label for="semaine">Choisir une semaine</label>
                <input type="week" id="semaine">
            </div>
            <div>
                <label for="explications">Vos explications</label>
                <textarea rows="5" id="explications"></textarea>
            </div>
            <div>
                <label for="reinitialiser">Votre recherche</label>
                <input type="button" value="Réinitialiser" id="reinitialiser">
            </div>
        </fieldset>
        <fieldset>
            <legend>Bouton envoi</legend>
            <input type="submit" value="Envoyer" id="envoyer">
        </fieldset>
    </form>
</body>
</html>
