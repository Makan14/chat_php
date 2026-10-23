<!-- start 1 session -->
 <?php
    session_start();
    if(!isset($_SESSION['user'])){
        // si l utilisateur n est pas conecté redirection vers la page de connexion
        header("location:index.php"); 
        exit; // ← 👋 STOP : on arrête TOUT ici, tout de suite
    }
    $user = $_SESSION['user']; //email de l utilisateur 
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width-device-width, initial-scale-1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <meta name='description' content=''>
  <meta name='author' content='Makan MACALOU'>
  <meta name='keywords' content=', , , '>
  <link rel='stylesheet' href='css/style.css'>
  <title><?=$user?> | Chat</title>
</head>
<body>
    <div class="chat">
        <div class="button-email">
            <span><?=$user?></span>
            <a href="deconnexion.php" class="deconnexion_btn">Déconnexion</a>
        </div>

        <!-- messages -->
         <div class="message_box">
            <?php
            // inclure la page message.php 
            include "messages.php"
            ?>
        
         </div>

         <!-- fin messages -->
          <form action="" class="send_message" method="POST">
            <textarea name="message" cols="30" placeholder="Votre message" ></textarea>
            <input type="submit" value="Envoyé" name="Send"> 
          </form>
    </div>
</body>
</html>