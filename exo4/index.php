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

            <!-- Créez un formulaire avec les champs "civilité", "nom" et "prénom". À l'envoie du formulaire sur la même page, Affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'affichage de balises html. -->
         <div class="col-12 col-md-4 border border-dark">
            <h2 class="text-center">Exo4</h2>

            <!-- <h3>Créez un formulaire avec les champs "nom" et "prénom". À l'envoie du formulaire sur une autre page, Affichez les informations saisies.</h3> -->

            <div class=" border border-dark">
                  
            <?php
            if (empty($_POST['firstName']) && empty($_POST['lastName'])) {
            ?>
            <form method="post" action="index.php">
               <select name="civilite">
                     <option>Mr</option>
                     <option>Mme</option>
               </select>
                     <label>Nom</label>
                     <input type="text" name="lastName" placeholder="Votre nom" required>
                     <label>Prénom</label>
                     <input type="text" name="firstName" placeholder="Votre prénom" required>
                     <input type="submit" name="valider" value="Valider"/>
            </form>
            <?php 
               }
               $rejex = "/^[A-Z.-]+[A-Za-z.-]+[^0-9]$/";
               if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['civilite'])){
                  if(preg_match($rejex , $_POST['lastName']) && preg_match($rejex , $_POST['firstName'])){
                        echo 'Vous etes : ' .  $_POST['civilite'] . ' ' . strip_tags($_POST['lastName']) . ' ' .strip_tags($_POST['firstName']);
                  } else {
                        echo 'Veuillez verifier votre saisie !';
                  }
               }
               
            ?>

         </div> 
         </div>
      </div>
   </div>
</body>
</html>