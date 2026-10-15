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
  <title>Connexion | Chat</title>
</head>
<body>

  <?php
    if(isset($POST['button_inscription'])){
       // si le formulaire est envoyé
      // se connecter à la bdd
      //include "connexion_bdd.php" 🌉 — "Colle ici le contenu du fichier de connexion" = on ouvre le pont vers MySQL.
      include "connexion_bdd.php";

      // extraire les infos du formulaire
      //extract($_POST) 🪄 — "Transforme chaque donnée en variable" : $_POST['email'] devient $email comme par magie.
      extract($_POST);

      // verifions si ls champs existe et s'il sont vide ou rempli
      if(isset($email) && isset($mdp1) && $email !="" && $mdp1 !="" && isset($mdp2) && $mdp2 !=""){

      }else{
        $error = "Veuillez remplir tous les champs !";
      }
    } 
  ?>

  <form action="" method="POST" class="form_connexion_inscription">
    <h1>INSCRIPTION</h1>
    <p class="message_error"></p>

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