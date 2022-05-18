<?php

    if (isset($_POST['nom'])){

        echo 'oui';
        $message = array();

        $message['nom'] = $_POST['nom'];
        $message['prenom'] = $_POST['prenom'];
        $message['nom'] = $_POST['nom'];
        $message['dateDeNaissance'] = $_POST['dateDeNaissance'];

        $message['ville'] = $_POST['ville'];
        $message['codePostal'] = $_POST['codePostal'];
        $message['adresse'] = $_POST['adresse'];
        $message['telephone'] = $_POST['telephone'];
        $message['email'] = $_POST['email'];
        $message['mdp1'] = $_POST['mdp1'];
        $message['mdp2'] = $_POST['mdp2'];



        $js = file_get_contents('inscription.json');

        $js = json_decode($js, true);

        $js[] = $message;

        $js = json_encode($js);

        file_put_contents('inscription.json', $js);

    }

?>