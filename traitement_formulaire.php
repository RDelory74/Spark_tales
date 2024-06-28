<?php
session_start();
$serveur = "localhost";
$file = 'bdd.txt';
// Je néttoi mes données avec ma fonction valid_info
function valid_info($infos)
{
    $infos = trim($infos);
    $infos = stripslashes($infos);
    $infos = htmlspecialchars($infos);
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
// Je fais un tableau pour insérer mes valeurs dedans
$datatab = array(
    "civilite" => $civilite,
    "name" => $name,
    "email" => $mail,
    "raison" => $Raison,
    "message" => $message,
);
//Je démarre une condition qui dit que: Si les chants (name/email/message/civilité et que le mail est valide et que le message comporte au moins 5 caractères)
// Alors tu remplis le fichier bdd.txt  et tu remplis le tableau $datatab et tu renvoi l'utilisateur sur le fichier merci.php
if (
    isset($name)
    && isset($mail)
    && isset($message)
    && filter_var($mail, FILTER_VALIDATE_EMAIL)
    && isset($civilite)
    && strlen($message) > 5
) {
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) !== false) {
        $datatab["civilite"] = $civilite;
        $datatab["name"] = $name;
        $datatab["email"] = $mail;
        $datatab["Raison"] = $Raison;
        $datatab["message"] = $message;
        $_SESSION['headerpunch'] = var_dump($datatab);
        header("Location:merci.php");
        exit;
    } else {
// Sinon tu renvois l'utilisateur sur la page de contact et tu affiches "Formulaire pas valide"
        $_SESSION['errors'] = "Formulaire pas valide !!";
        header("Location:contact.php"); // Rediriger vers le formulaire
        exit;
    }
}
var_dump($datatab);
