<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="CSS/menu.css">
    <link rel="stylesheet" href="CSS/pied_de_page.css">
    <link rel="stylesheet" href="CSS/accueil.css">
    <link rel="stylesheet" href="CSS/global.css">
</head>
<body>
    <?php include("includes/menu.php") ?>
    <main>
        <div class="galerie_images">
            <h2>Galerie images</h2>
            <div>
                <div><img src="images/pc.jpg" alt=""></div>
                <div><img src="images/pc.jpg" alt=""></div>
            </div>
            <div>
                <div><img src="images/pc.jpg" alt=""></div>
                <div><img src="images/pc.jpg" alt=""></div>
            </div>
            <div>
                <div><img src="images/pc.jpg" alt=""></div>
                <div><img src="images/pc.jpg" alt=""></div>
            </div>
            <div>
                <div><img src="images/usb.png" alt=""></div>
                <div><img src="images/usb.png" alt=""></div>
            </div>
            <div>
                <div><img src="images/usb.png" alt=""></div>
                <div><img src="images/usb.png" alt=""></div>
            </div>
            <div>
                <div><img src="images/office.jpg" alt=""></div>
                <div><img src="images/office.jpg" alt=""></div>
            </div>
            <div>
                <div><img src="images/office.jpg" alt=""></div>
                <div><img src="images/office.jpg" alt=""></div>
            </div>
            <div>
                <div><img src="images/office.jpg" alt=""></div>
                <div><img src="images/office.jpg" alt=""></div>
            </div>
            <div>
                <div><img src="images/packet.png" alt=""></div>
                <div><img src="images/packet.png" alt=""></div>
            </div>
            <div>
                <div><img src="images/packet.png" alt=""></div>
                <div><img src="images/packet.png" alt=""></div>
            </div>
            <div>
                <div><img src="images/packet.png" alt=""></div>
                <div><img src="images/packet.png" alt=""></div>
            </div>
        </div>
        <form action="">
            <div>
                <fieldset>
                    <legend>Vos informations</legend>
                    <div><label for="nom">Votre nom</label><input required type="text" name="nom" id="nom" placeholder="Nom"></div>
                    <div><label for="prenom">Votre prénom</label><input required type="text" name="prenom" id="prenom" placeholder="Prénom"></div>
                    <div><label for="email">Votre nom</label><input required type="email" name="email" id="email" placeholder="Email"></div>
                    <div><label for="telelphone">Votre numéro de téléphone</label><input required type="tel" name="telelphone" id="telephone" placeholder="Numéro de téléphone"></div>
                </fieldset>
                <fieldset>
                    <legend>Votre commande</legend>
                    <div>
                        <label for="choix">Choisissez parmi les possibilités</label>
                        <select required name="choix" id="choix">
                            <optgroup label="Hardware">
                                <option value="ecran">Ecran</option>
                                <option value="souris">Souris</option>
                                <option value="clavier">Clavier</option>
                                <option value="ram">RAM</option>
                                <option value="disque_dur">Dsique dur</option>
                            </optgroup>
                            <optgroup label="Software">
                                <option value="office_365">Office 365</option>
                                <option value="packet_tracer">Packet Tracer</option>
                                <option value="google_workspace">Google workspace</option>
                            </optgroup>
                        </select>
                    </div>
                    <div><label for="quantite">La quantité souhaitée</label><input required type="number" name="quantite" id="quantite" min="1" value="1"></div>
                    <div><label for="date">Date de commande souhaitée</label><input required type="date" name="date" id="quantite"></div>
                    <div>
                        <label>Facture choisie</label>
                        <div class="checkbox">
                            <label class="checkbox_label" for="facture_email">Par mail</label>
                            <input type="checkbox" id="facture_email" name="facture_email" value="facture_email" checked>
                        </div>
                        <div class="checkbox">
                            <label class="checkbox_label" for="facture_papier">Par papier</label>
                            <input type="checkbox" id="facture_papier" name="facture_papier" value="facture_papier">
                        </div>
                    </div>
                    <div>
                        <label for="remarques">Remarques supplémentaires</label>
                        <textarea name="remarques" id="remarques" cols="30" rows="10" placeholder="Votre message"></textarea>
                    </div>
                </fieldset>
            </div>
            <div class="text_center">
                <button type="submit">Envoyer</button>
            </div>
        </form>
        <div class="galerie_images">
            <h2>Galerie images</h2>
            <div>
                <div><img src="images/pc.jpg" alt=""></div>
                <div><img src="images/pc.jpg" alt=""></div>
            </div>
            <div>
                <div><img src="images/pc.jpg" alt=""></div>
                <div><img src="images/pc.jpg" alt=""></div>
            </div>
            <div>
                <div><img src="images/pc.jpg" alt=""></div>
                <div><img src="images/pc.jpg" alt=""></div>
            </div>
            <div>
                <div><img src="images/usb.png" alt=""></div>
                <div><img src="images/usb.png" alt=""></div>
            </div>
            <div>
                <div><img src="images/usb.png" alt=""></div>
                <div><img src="images/usb.png" alt=""></div>
            </div>
            <div>
                <div><img src="images/office.jpg" alt=""></div>
                <div><img src="images/office.jpg" alt=""></div>
            </div>
            <div>
                <div><img src="images/office.jpg" alt=""></div>
                <div><img src="images/office.jpg" alt=""></div>
            </div>
            <div>
                <div><img src="images/office.jpg" alt=""></div>
                <div><img src="images/office.jpg" alt=""></div>
            </div>
            <div>
                <div><img src="images/packet.png" alt=""></div>
                <div><img src="images/packet.png" alt=""></div>
            </div>
            <div>
                <div><img src="images/packet.png" alt=""></div>
                <div><img src="images/packet.png" alt=""></div>
            </div>
            <div>
                <div><img src="images/packet.png" alt=""></div>
                <div><img src="images/packet.png" alt=""></div>
            </div>
        </div>
    </main>
    <?php include("includes/pied_de_page.php") ?>
</body>
</html>