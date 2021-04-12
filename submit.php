<?php
$destinataire = 'taom360@gmail.com';
// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
$expediteur = $_POST['mail'];
$copie = 'taom360@gmail.com';
$copie_cachee = 'taom360@gmail.com';
$objet = 'le code '; // Objet du message
$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
$headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
$headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
$headers .= 'Cc: '.$copie."\n"; // Copie Cc
$headers .= 'Bcc: '.$copie_cachee."\n\n"; // Copie cachée Bcc
$message = $_POST['code'];
if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
{
     header('Location: thanks.php');
}
else // Non envoyé
{
    echo "Votre Code  n'a pas pu être envoyé";
}
