<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Faire une page HTML permettant de donner à l'utilisateur :

    son User Agent
    son adresse ip
    le nom du serveur
-->
<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$adresseIp = $_SERVER['SERVER_NAME'];
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice1</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>User agent : </h1>
        <!--on affiche le User Agent-->
        <?= $userAgent ; ?>
        <h1>Adresse IP du visiteur : </h1>
        <?php

        function ipAdd() {
            //si c'est une connexion partagée
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
                //sinon si c'est un proxy
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                // sinon c'est une connexion "normale"
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
        }
        ?>
        <?= 'Adresse IP - ' . ipAdd(); ?>
        <h1>Nom du server : </h1>
        <?= $adresseIp; ?>

    </body>
</html>




