<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, 
firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page.-->


<?php
// On ouvre une session
session_start();
// on inscrit des valeurs dans le tableau de session
$_SESSION['lastName'] = 'Lambret';
$_SESSION['firstName'] = 'Aurélie';
$_SESSION['age'] = '30';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice2</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Bonjour</h1>
        <p>Votre nom est : <?= $_SESSION['lastName'] ?></p>
        <p>Votre prénom est : <?= $_SESSION['firstName']; ?></p>
        <p>Vous avez : <?= $_SESSION['age']; ?> ans.</p>
        <a href="page2.php"> vers page 2</a>
    </body>
</html>





