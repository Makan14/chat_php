<?php
// connexion à la bdd
$con = mysqli_connect("localhost","root","","chat_php");
if(!$con){
    // si la connexion échoue, afficher
    echo "Connexion échouée";
}
    
// gere ls accents et autres caracteres francais
$req = mysqli_query($con, "SET NAMES UTF8");

?>