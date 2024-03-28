<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="./inscr2.css">
    <script defer src="./inscr2.js"></script>
</head>
<body>

    <form action="./traiteForm.php" method="post">
        <h4>Deuxième Page</h4>
        <hr>

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">

        <label for="confirmpassword">Confirmer le Mot de passe</label>
        <input type="password" name="confirmpassword" id="confirmpassword">
       
        <div class="radio">
            <h5>Admin</h5><br>
            <label for="oui">Oui</label>
            <input type="radio" name="admin" id="admin" value="oui">
            <label for="non">Non</label>
            <input type="radio" name="admin" id="admin" value="non">
        </div>
       
        <input type="submit" value="Valider">
    </form>
    
</body>
</html>