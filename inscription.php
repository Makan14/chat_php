<!DOCTYPE html>
<html lang='fr'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width-device-width, initial-scale-1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <meta name='description' content=''>
  <meta name='author' content='Makan MACALOU'>
  <meta name='keywords' content=', , , '>
  <link rel='stylesheet' href='css/style.css'>
  <title>Inscription</title>
</head>
<body>

  <?php
    if(isset($_POST['button_inscription'])){
       // si le formulaire est envoyé
      // se connecter à la bdd
      //include "connexion_bdd.php" 🌉 — "Colle ici le contenu du fichier de connexion" = on ouvre le pont vers MySQL.
      include "connexion_bdd.php";

      // extraire les infos du formulaire
      //extract($_POST) 🪄 — "Transforme chaque donnée en variable" : $_POST['email'] devient $email comme par magie.
      extract($_POST);

      // verifions si ls champs existe et s'il sont vide ou rempli
      if(isset($email) && isset($mdp1) && $email !="" && $mdp1 !="" && isset($mdp2) && $mdp2 !=""){
        if($mdp2 != $mdp1){
          // s ils sont diff
          $error = "Les mots de passes sont differents !";
        }else{
          // si non, verifions si l email existe
          $req = mysqli_query($con, "SELECT * FROM utilisateur WHERE email = '$email'");
          if(mysqli_num_rows($req) == 0){
            // si ca n existe pas, creons le compte
              $req = mysqli_query($con , "INSERT INTO utilisateur VALUES (NULL, '$email', '$mdp1')");
              if($req){
                // si le compte à été créer, créons 1 variable pr afficher 1 msg dns la page de connexion
                $_SESSION['message'] = "<p class='message'>Votre compte a été créer avec succès !</p>";
                // redirection vers la page de connexion
                header("Location:index.php");
                
              }else{
                // si non
                $error = "Inscription Echouée !";
              }
          }else{
            // si ca existe
            $error = "Cet email existe déjà !";
          }
        }

      }else{
        $error = "Veuillez remplir tous les champs !";
      }
    } 
  ?>

  <form action="" method="POST" class="form_connexion_inscription">
    <h1>INSCRIPTION</h1>
    <p class="message_error">
      <?php 
        // affichons l erreur
        if(isset($error)){
          echo $error;
        }
      ?>
    </p>

    <label>Adresse Mail</label>
    <input type="email" name="email">

    <label>Mot de passe</label>
    <input type="password" name="mdp1" class="mdp1">

    <label>Confirmation mot de passe</label>
    <input type="password" name="mdp2" class="mdp2">
    <input type="submit" value="Inscription" name="button_inscription">
    <p class="link">Vous avez un compte ? <a href="index.php">Se connecter</a></p>
  </form>
  
  <script src='js/main.js'></script>
</body>
</html>