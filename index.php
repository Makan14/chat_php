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
      //if(isset($_POST['bouton_con'])) 📮 — "Est-ce que le bouton Connexion a été cliqué ?" $_POST = l'enveloppe avec les données du formulaire. isset = "existe ?". Si personne n'a cliqué, on ne fait rien !
    if(isset($_POST['button_con'])){
      // si le formulaire est envoyé
      // se connecter à la bdd
      //include "connexion_bdd.php" 🌉 — "Colle ici le contenu du fichier de connexion" = on ouvre le pont vers MySQL.
      include "connexion_bdd.php";

      // extraire les infos du formulaire
      //extract($_POST) 🪄 — "Transforme chaque donnée en variable" : $_POST['email'] devient $email comme par magie.
      extract($_POST);

      // verifions si ls champs existe et s'il sont vide ou rempli
      if(isset($email) && isset($mdp) && $email !="" && $mdp !=""){

      }else{
        // si ls champs sont vides
        $error = "Veuillez remplir tous les champs !";
      }
    }
  ?>

  <form action="" method="POST" class="form_connexion_inscription" >
    <h1>CONNEXION</h1>
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
    <input type="submit" value="Connexion" name="button_con">
    <p class="link">Vous n'avez pas de compte ? <a href="inscription.php">Créer un compte</a></p>
  </form>
  
  <!-- <script src='js/main.js'></script> -->
</body>
</html>