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
         <div class="message_box">Chargement....</div>
        <!-- fin messages -->

        <?php
            // envoi ds msg 
            if(isset($_POST['send'])){
                // recuperons le msg
                $message = $_POST['message'];
                // connexion à la bdd
                include("connexion_bdd.php");
                // verifions si le champs n est ps vide
                if(isset($message) && $message != ""){
                    // inserer le msg dns la bdd
                    $req = mysqli_query($con, "INSERT INTO messages VALUES(NULL, '$user', '$message',NOW())");
                    // on actualise la page
                    header('location:chat.php');
                }else{
                    // si le msg est vide, on actualise la page
                    header('location:chat.php');
                }
            }
        ?>


          <form action="" class="send_message" method="POST">
            <textarea name="message" cols="30" placeholder="Votre message" ></textarea>
            <input type="submit" value="Envoyé" name="send"> 
          </form>
    </div>

    <script>
        // on actualise automatiquement le chat en utilisant AJAX
        var message_box = document.querySelector('.message_box')
    </script>
</body>
</html>