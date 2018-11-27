<?php
setcookie('login', $_POST['login'], time() + 3600 * 24 * 31);
setcookie('password', $_POST['password'], time() + 3600 * 24 * 31);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Bonjour </h1>
        <?= $_POST['civility'] ?>
        <p>Votre nom est : <?= $_POST['lastName']; ?></p>
        <p>Votre prénom est : <?= $_POST['firstName']; ?></p>
        <p>Vous avez : <?= $_POST['age']; ?> ans.</p>
        <p>votre login est 
            <!--Lecture de la valeur du cookie login-->
            <?= $_COOKIE['login']; ?></p>
        <p>votre Mot de passe est 
            <!--Lecture de la valeur du cookie password-->
            <?= $_COOKIE['password']; ?></p>
        <a href="index.php"> vers page 1</a>
    </body>
</html>


