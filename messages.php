 
 <?php
 session_start();
//  si l utilisateur c connecter
    if(isset($_SESSION['user'])){
        // connexion à la bdd
        include "connexion_bdd.php";

        $req = mysqli_query($con, "SELECT * FROM messages ORDER BY id_m DESC");

        if(mysqli_num_rows($req) == 0){
            // s il n ya pas de message
            echo "Messagerie vide";
        }else{
            // si oui
            while($row= mysqli_fetch_assoc($req)){
                // si cst vs fait qui avez send le msg on utilise ce format :
                if($row['email'] == $_SESSION['user']){
                    ?>
                        <div class="message your_message">
                            <span>Vous</span>
                            <p><?=$row['msg']?></p>
                            <p class="date"><?=$row['date']?></p>
                        </div>
                    <?php
                }else{
                    // si vous n êtees pas l auteur du message, on affiche ce message sur ce format
                    ?>
                         <div class="message others_message">
                            <span><?=$row['email']?></span> 
                            <p><?=$row['msg']?></p>
                            <p class="date"><?=$row['date']?></p> 
                        </div>
                    <?php

                }
            }
        }
    }
 ?>
 
 
 
 
        <!-- 

            -->