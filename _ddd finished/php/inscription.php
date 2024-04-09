<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="../Css/inscription.css">
    <script defer src="../Js/inscription.js"></script>
</head>
<body>

    <form action="./traiteIns.php" method="post">
        <h4>Crèe Compte</h4>
        <hr>

        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom" required> 

        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required>

        <label for="age">Age</label>
        <input type="int" name="age" id="age" required>
       
        <input type="submit" value="Valider">

        <p class="p">Vous avez deja un compte ? <a href="form.php">se connecter</a></p>
    </form>
    
</body>
</html>