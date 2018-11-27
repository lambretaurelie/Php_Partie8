<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. 
A la validation du formulaire, stocker les informations dans un cookie.-->

<?php
// On ouvre une session
session_start();
// on inscrit des valeurs dans le tableau de session
$_SESSION['lastName'] = 'Lambret';
$_SESSION['firstName'] = 'Aurélie';
$_SESSION['age'] = '30';

if (isset($_POST['login']) && isset($_POST['password'])) {
    // Création du cookie
    setcookie('login', $_POST['login'], time() + 3600 * 24 * 31);
    setcookie('password', $_POST['password'], time() + 3600 * 24 * 31);
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice3</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Bonjour</h1>
        <form action="" method="POST">
            <select name = "gender">
                <option value = "Civility" >Civilité</option>
                <option value = "Mr" >Mr</option>
                <option value = "Mme">Mme</option>
            </select>
            <p><label for = "firstName"> Prénom :</label> <input type = "text" name = "firstName" /></p>
            <p><label for = "lastName">Nom :</label> <input type = "text" name = "lastName" /></p>
            <p><label for = "age">age :</label> <input type = "text" name = "age" /></p>
            <p><label for = "login">Login</label><input type = "text" name = "login" /></p>
            <p><label for = "password">Mot de passe</label><input type = "password" name = "password" /></p>
            <p><input type = "submit" value = "valider" name = "valide" /></p>
        </form>
        <?= 'remplir les champs vides'; ?>
    </body>
</html>
