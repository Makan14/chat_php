// confirmation du mot de passe
// je verifi si le mdp et la confirmation son bonne
var mdp1 = document.querySelector('.mdp1')
var mdp2 = document.querySelector('.mdp2')

// .onkeyup = "à chaque fois qu'on RELÂCHE une touche du clavier"
mdp2.onkeyup = function() {
    // evenement lorsqu on ecrit dns le champs : confirmation de mot de passe
    message_error = document.querySelector('.message_error')
    if (mdp1.value != mdp2.value) {  //s il ne sont pas egaux
        // on affiche un msg d erreur
        message_error.innerText = "Les mots de passe ne sont pas conformes"
    }else{ 
        // on ecrit rien dns msg error
        message_error.innerText=""
    }
}

