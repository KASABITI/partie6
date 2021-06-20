<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PhP - Partie 6</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="col-12 text-center border border-dark">Partie 6</h1>
            <div class="col-12 col-md-4 border border-dark">
            <h2 class="text-center">Exo6</h2>

            <h3>
            Créez un formulaire avec les champs "civilité", "nom" et "prénom" ainsi qu'un bouton permettant de sélectionner un fichier à envoyer. À l'envoie du formulaire sur la même page, affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'affichage de balises html. Le fichier envoyé doit être un pdf.
            </h3>

            <div class=" border border-dark"> 
            <?php
       
        if (empty($_POST['firstnameForm']) && empty($_POST['lastnameForm'])) {
            ?>
            <form method="post" action="index.php" enctype="multipart/form-data">
                <select name="civilite">
                    <option value="civiliteMr">Mr</option>
                    <option value="civiliteMme">Mme</option>
                </select>
                <label>Nom</label>
                <input type="text" name="lastnameForm" placeholder="Votre nom" required>
                <label>Prénom</label>
                <input type="text" name="firstnameForm" placeholder="Votre prénom" required>
                <input type="file" name="myFile">
                <input type="submit" name="valider" value="Valider">
            </form>
            <?php
        } else {
            if (isset($_POST['firstnameForm']) && isset($_POST['lastnameForm']) && isset($_FILES['myFile'])) {
                //on récupère le chemin du fichier à uploader
                $infosfichier = pathinfo($_FILES['myFile']['name']);
                //on stocke l'extension du fichier selectionné
                $extension_upload = $infosfichier['extension'];
                //on stocke la chaîne "pdf" dans un tableau
                $extensions_autorisees = array('pdf');
                //on recherche si l'extension du fichier existe dans le tableau
                if (in_array($extension_upload, $extensions_autorisees)) {
                    echo 'Bonjour ' . $_POST['firstnameForm'] . ' ' . $_POST['lastnameForm'] . ', le nom de votre fichier est ' . $_FILES['myFile']['name'] . ' !';
                } else {
                    echo 'votre fichier n\'est pas au format pdf';
                }
            }
        }
        ?>
                        </div> 
                </div>
            </div>
        </div>
</body>
</html>