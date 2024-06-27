<?php
 session_start();

 $serveur = "localhost";
 $file = 'bdd.txt';
 


 // Je néttoi mes données avec ma fonction valid_info
 function valid_info($infos){
    $infos= trim($infos);
    $infos= stripslashes($infos);
    $infos= htmlspecialchars($infos);
    return $infos;
}

 $mail = valid_info($_POST['email']);
 $civilite = valid_info($_POST["civility"]);
 $name = valid_info($_POST["name"]);
 $Raison = valid_info($_POST["Raison"]);
 $message = valid_info($_POST["message"]);


 // Je Stock les valeurs du formulaire dans des variables de session
$_SESSION['email'] = $mail;
$_SESSION['civility'] = $civilite;
$_SESSION['name'] = $name;
$_SESSION['Raison'] = $Raison;
$_SESSION['message'] = $message;


 // Je concatène les valeurs de mes variables dans une seule variable
$data = "Civilité: $civilite\n";
$data .= "Nom: $name\n";
$data .= "Email: $mail\n";
$data .= "Raison de contact: $Raison\n";
$data .= "Message:$message\n\n";

$datatab = array(
    "civilite" => $civilite,
    "name" => $name,
    "email" => $mail,
    "raison" => $raison,
    "message" => $message,
);

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
        // Effacer les données de la session après une soumission réussie
        unset($_SESSION['email']);
        unset($_SESSION['civility']);
        unset($_SESSION['name']);
        unset($_SESSION['Raison']);
        unset($_SESSION['message']);
        $_SESSION['headerpunch'] = "Made by you!!";
        header("Location:merci.php");
        exit;
        }
    
    }
    else {
        $_SESSION['errors'] = "Formulaire pas valide !!";
        header("Location: contact.php"); // Rediriger vers le formulaire
        exit;
    }


// Code commun aux deux situations
?>