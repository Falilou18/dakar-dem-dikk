<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="./styleForm.css">
    <script defer src="./indexform.js"></script>
</head>
<body>

    <form action="./traiteForm.php" method="post">
        <h4>Se Connecter</h4>
        <hr>

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">

       
        <input type="submit" value="Valider">
        <p class="p">Vous avez oubliè votre mot de passe ? <a href="mdp.php">cliquez ici</a></p>
    </form>
    
</body>
</html>