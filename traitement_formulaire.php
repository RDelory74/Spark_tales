<?php
 
 $serveur = "localhost";
 $file = 'bdd.txt';
 $mail = valid_info($_POST['email']);
 $civilite = valid_info($_POST["civility"]);
 $name = valid_info($_POST["name"]);
 $Raison = valid_info($_POST["Raison"]);
 $message = valid_info($_POST["message"]);

 // Je concatène les valeurs de mes variables dans une seule variable

$data = "Civilité: $civilite\n";
$data .= "Nom: $name\n";
$data .= "Email: $mail\n";
$data .= "Raison de contact: $Raison\n";
$data .= "Message:$message\n\n";

// Je néttoi mes données avec ma fonction valid_info

 function valid_info($infos){
    $infos= trim($infos);
    $infos= stripslashes($infos);
    $infos= htmlspecialchars($infos);
    return $infos;
}

    if (
       isset($name)
    && isset($mail)
    && isset($message)
    && filter_var($mail, FILTER_VALIDATE_EMAIL)
    && isset($civilite)
    && strlen($message) > 5
    ){
       if (file_put_contents($file,$data, FILE_APPEND | LOCK_EX)!== false)
        {
        header("Location:merci.php");
        }
    }
    else {
        echo "Formulaire pas valide !! ";
        // Le formulaire n'a pas été soumis
    }
// Code commun aux deux situations
?>