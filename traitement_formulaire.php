<?php
 $serveur = "localhost";

 $mail = valid_info($_POST['email']);
 $civilité = valid_info($_POST["civility"]);
 $name = valid_info($_POST["name"]);
 $Raison = valid_info($_POST["Raison"]);
 $message = valid_info($_POST["message"]);

 function valid_info($infos){
    $infos = trim($infos);
    $infos = stripslashes($infos);
    $infos = htmlspecialchars($infos);
}

    if (
       isset($_POST['name'])
    && isset($_POST['email'])
    && isset($_POST['message'])
    && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)
    && isset($_POST['civility'])
    && strlen($_POST['message']) > 5
    //&& preg_match("^[A-Za-z '-]+$",$_POST["name"])
    ){
        // Le formulaire a été soumis : récupération des informations et    création des variables
        echo "Félicitation $civilité $name votre requête pour $Raison a bien été envoyée avec le message suivant:$message ";
        header("Location:merci.php");
    }
    else {
        echo "Formulaire pas valide !! ";
       
        // Le formulaire n'a pas été soumis
        // ...
    }
// Code commun aux deux situations
// ...




?>