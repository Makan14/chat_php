<!-- start 1 session -->
 <?php
    session_start();
    if(!isset($_SESSION['user'])){
        // si l utilisateur n est pas conecté redirection vers la page de connexion
        header("location:index.php"); 
        exit; // ← 👋 STOP : on arrête TOUT ici, tout de suite
    }
    // destruction de ttes ls sessions
    session_destroy();

    // redirection vers la page de connexion
    header("location:index.php");
    exit;

 ?>

