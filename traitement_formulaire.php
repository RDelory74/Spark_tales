<?php







if () 
{
echo "Le message n'a pas assez de caractères.";
} 

if (filter_var($mail, FILTER_VALIDATE_EMAIL)) 
{
    
} else echo "Le mail n'est pas valide.";
if (empty($name)) 
{
echo "Le chant Civilité n'est pas valide.";
} 
if (empty($Raison)) 
{
echo "Le chant raison n'est pas valide.";
} 


if (isset($_POST['name']) 
&& isset($_POST['email']) 
&& isset($_POST['message']) 
&& filter_var($mail, FILTER_VALIDATE_EMAIL) 
&& isset($_POST['civility']) 
&& strlen($_POST['message']) > 5) {
    // Le formulaire a été soumis : récupération des informations et    création des variables
    $mail = $_POST['email'];
    $civilité = $_POST["civility"];
    $name = $_POST["name"];
    $Raison = $_POST["Raison"];
    $message = $_POST["message"];

    echo "Félicitation $civilité $name votre requête pour $Raison a bien été envoyée avec le message suivant:$message ";
}
else {
    echo "Formulaire pas valide !! ";
    // Le formulaire n'a pas été soumis
    // ...
}
// Code commun aux deux situations
// ...