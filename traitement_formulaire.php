<?php



$mail = $_POST['email'];
$civilité = $_POST["civility"];
$name = $_POST["name"];
$Raison = $_POST["Raison"];
$message = $_POST["message"];



if (strlen($message) < 5) 
{
echo "Le message n'a pas assez de caractères.";
} 

if (filter_var($mail, FILTER_VALIDATE_EMAIL)) 
{
echo "Le mail n'est pas valide.";
} 
if (empty($name)) 
{
echo "Le chant Civilité n'est pas valide.";
} 
if (empty($Raison)) 
{
echo "Le chant raison n'est pas valide.";
} else echo "Félicitation $civilité $name votre requête pour $Raison a bien été envoyée avec le message suivant:$message ";