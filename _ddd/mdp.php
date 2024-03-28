<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="./mdp.css">
    <script defer src="./mdp.js"></script>
</head>
<body>

    <form action="./mdptraite.php" method="post">
        <h4>Changer le mot de passe</h4>
        <hr>


        <label for="password">Nouveau Mot de passe</label>
        <input type="password" name="password" id="password">

        <label for="confirmpassword">Confirmer le Mot de passe</label>
        <input type="password" name="confirmpassword" id="confirmpassword">
       
        <input type="submit" value="Valider">
       
    </form>
    
</body>
</html>