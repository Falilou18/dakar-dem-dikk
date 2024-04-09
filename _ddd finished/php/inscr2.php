<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="../Css/inscr2.css">
    <script defer src="../Js/inscr2.js"></script>
</head>
<body>

    <form action="./traiteForm.php" method="post">
        <h4>Deuxième Page</h4>
        <hr>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required>

        <label for="confirmpassword">Confirmer le Mot de passe</label>
        <input type="password" name="confirmpassword" id="confirmpassword" required>
       
        
       
        <input type="submit" value="Valider">
    </form>
    
</body>
</html>