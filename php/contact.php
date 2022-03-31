<?php

$regleNom = "/^[a-zA-Z '-]+$/";
$reglePrenom = "/^[a-zA-Z '-]+$/";
$regleEmail = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,6}$/";
$regleMessage = "/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ',;()-. ]+$/";
$res = 'toto';
if((isset($_POST['nom']))&&(preg_match($regleNom, $_POST['nom']))){
    $nom = $_POST['nom']; 
} 

if((isset($_POST['prenom']))&&(preg_match($reglePrenom, $_POST['prenom']))){
  $prenom = $_POST['prenom']; 
} 

if((isset($_POST['mail']))&&(preg_match($regleEmail, $_POST['mail']))){
    $mail = $_POST['mail'];
}
if((isset($_POST['message']))&&(preg_match($regleMessage, $_POST['message']))){
    $message = $_POST['message'];
}
if(($nom)&&($prenom)&&($mail)&&($message)){
    $res = array('validation' => "Email envoyé");
    echo json_encode($res);
    mail("m.kammoun@codeur.online", "Bonjour, $prenom $nom", $message, "From: $mail");
}

?>