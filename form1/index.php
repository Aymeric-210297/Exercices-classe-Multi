<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <fieldset>
            <legend>Vos coordonnées</legend>
            <div>
                <label for="nom">Nom :</label>
                <input required type="text" name="nom" id="nom" placeholder="Votre nom">
            </div>
            <div>
                <label for="prenom">Prénom :</label>
                <input maxlength="20" minlength="3" required type="text" name="prenom" id="prenom" placeholder="Votre prénom">
            </div>
            <div>
                <label for="naissance">Date de naissance :</label>
                <input required type="date" name="naissance" id="naissance">
            </div>
            <div>
                <label for="email">Email :</label>
                <input required type="email" name="email" id="email" placeholder="Votre email">
            </div>
            <div>
                <label for="pays">Pays :</label>
                <select name="pays" id="pays">
                    <optgroup label="Europe">
                        <option value="belgique">Belgique</option>
                    </optgroup>
                    <optgroup label="Amérique du nord">
                        <option value="etats-unis">Etats-Unis</option>
                        <option value="canada">Canada</option>
                    </optgroup>
                    <optgroup label="Asie">
                        <option value="japon">Japon</option>
                        <option value="chine">Chine</option>
                    </optgroup>
                </select>
            </div>
            <div>
                <label for="copies">Nombre de copies souhaitées :</label>
                <input value="1" max="20" min="1" required type="number" name="copies" id="copies">
            </div>
        </fieldset>
        <fieldset>
            <legend>Périodicité</legend>
            
            <div>
                <input type="radio" id="hebdomadaire" name="period" value="hebdomadaire" checked>
                <label for="hebdomadaire">Newsletter hebdomadaire</label>
            </div>
            <div>
                <input type="radio" id="mensuelle" name="period" value="mensuelle">
                <label for="mensuelle">Newsletter mensuelle</label>
            </div>
            <div>
                <input type="radio" id="trimestrielle" name="period" value="trimestrielle">
                <label for="trimestrielle">Newsletter trimestrielle</label>
            </div>
        </fieldset>
        <fieldset>
            <legend>Version papier - informatique</legend>
            <div>
                <input type="checkbox" id="papier" name="papier" value="papier" checked>
                <label for="hebdomadaire">Recevoir la version papier</label>
            </div>
            <div>
                <input type="checkbox" id="informatique" name="informatique" value="informatique" checked>
                <label for="informatique">Recevoir la version informatique</label>
            </div>
        </fieldset>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>