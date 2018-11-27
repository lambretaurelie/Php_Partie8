<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice2</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1> Bonjour !</h1>
        <p> Bienvenue <?= $_SESSION['lastName'] . ' ' . $_SESSION['firstName']; ?></p>
        <p>Vous avez : <?= $_SESSION['age']; ?> ans.</p>
        <a href="index.php"> vers page 1</a>
    </body>
</html>
