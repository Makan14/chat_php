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
  <title>makan@gmail.com | Chat</title>
</head>
<body>
    <div class="chat">
        <div class="button-email">
            <span>makan@gmail.com</span>
            <a href="#" class="deconnexion_btn">Déconnexion</a>
        </div>

        <!-- messages -->
         <div class="message_box">
            <div class="message your_message">
                <span>Vous</span>
                <p>Comment ça va ?</p>
                <p class="date">26-12-01 00:25:26</p>
            </div>

            <div class="message others_message">
                <span>azerty@gmail.com</span> 
                <p>Oui ça va merci</p>
                <p class="date">26-12-01 00:25:26</p> 
            </div>


         </div>

         <!-- fin messages -->
          <form action="" class="send_message" method="POST">
            <textarea name="message" cols="30" placeholder="Votre message" ></textarea>
            <input type="submit" value="Envoyé" name="Send"> 
          </form>
    </div>
</body>
</html>