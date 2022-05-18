<?php



    $to = "camilleokon3@gmail.com";
    $subject = $_POST['sujet'];
    $message = $_POST['contenu'];

    $headers = "Content-Type: text/plain; charset=utf-8\r\n";
    $headers .= "From: ".$_POST['email']."\r\n";

    if(mail($to, $subject, $message, $headers)){
        echo "Envoyé !";
    }else{
        echo "Erreur d'envoi ...";
    }
?>