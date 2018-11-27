<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.-->


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice4</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Bonjour</h1>
        <form action="user.php" method="POST">
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
        <a href="user.php"> vers page 2</a>
    </body>
</html>



