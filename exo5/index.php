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
            <h2 class="text-center">Exo5</h2>

            <h3>
                Créez un formulaire avec les champs "civilité", "nom" et "prénom" ainsi qu'un bouton permettant de sélectionner un fichier à envoyer. À l'envoie du formulaire sur la même page, affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'affichage de balises html.
            </h3>

            <div class=" border border-dark"> 
            <?php
    if(empty($_POST['lastName']) || empty($_POST['firstName'])){

    
?>
            <form id="form" action="index.php" method="post" enctype="multipart/form-data">
                <label for="gender">Votre civilité ? </label>
                <select name="gender">
                    <option value="Monsieur">Mr</option>
                    <option value="Madame">Mme</otpion>
                    <option value="Autre">Autre</option>
                </select>
                <label for="lastName"> Nom : </label>
                <input type="text" name="lastName">
                <label for="firstName"> Prénom : </label>
                <input type="text" name="firstName">
                <label for="file">Votre fichier</label>
                <input type="file" name="file">
                <input type="submit" value="Envoyer le fichier">
             </form>
            <?php 
            }else{
            if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['gender'])) {
                    echo strip_tags('Bonjour ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ' ! Le nom du fichier envoyé est :'. ' ' . $_FILES['file']['name']);
                }
            }
            ?>
                        </div> 
                </div>
            </div>
        </div>
</body>
</html>