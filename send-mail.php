<?php

$destinataire = "TON_EMAIL@domaine.fr";

$sujet = "Nouvelle demande TAXI GRAY";

$message = "
Nouvelle demande de réservation :

Départ : ".$_POST['depart']."

Destination : ".$_POST['destination']."

Date : ".$_POST['date']."

Heure : ".$_POST['heure']."

Passagers : ".$_POST['passagers']."

Motif : ".$_POST['motif']."

Informations :
".$_POST['message'];

$headers = "From: TAXI GRAY <contact@taxigray.fr>";

mail($destinataire, $sujet, $message, $headers);

echo "Votre demande a bien été envoyée. Merci de contacter TAXI GRAY.";

?>
