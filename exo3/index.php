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
         <!-- Créez un formulaire avec les champs "civilité", "nom" et "prénom". À l'envoie du formulaire sur une autre page, Affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'inclusion de balises html. -->
         <div class="col-12 col-md-4 border border-dark">
            <h2 class="text-center">Exo3</h2>
            <h3>Créez un formulaire avec les champs "nom" et "prénom". À l'envoie du formulaire sur une autre page, Affichez les informations saisies.</h3>
            <p>Veuillez taper votre prénom et votre nom:</p>
            <div class=" border border-dark">
            <form  action="user.php" method="POST">
                  
                     <label for="civility">Choose your civility please:</label>
                     <select id="civility" name="civility" >
                        <option value="madame">madame</option>
                        <option value="monsieur">monsieur</option>
                     </select> 
                     <label for="last_name">Votre Nom svp:</label>
                     <input type="text" name="lastName" placeholder="Nom" id="last_name">
                     <label for="first_name">Votre  Prénom :</label> 
                     <input type="text" name="firstName" placeholder="Prénom" id="first_name">
                     <button  class=" btn btn-danger" type="submit">Valider </button>
         </form>
         </div> 
         </div>
      </div>
   </div>
</body>
</html>