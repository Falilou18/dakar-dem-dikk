<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="../Css/contact.css">
    <script defer src="../Js/contact.js"></script>
</head>
<body>

    <form action="./contactTraite.php" method="post">
        <h4>Nous Contacter</h4>
        <hr>
        
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="comment">Commentaire</label>
        <textarea name="comment" id="comment" cols="30" rows="10">

        </textarea>

       
        <input type="submit" value="Valider">
        <p>Notre numero de service est <span>800 00 30 30</span><br>
            Telephone Fixe : <span>33.800.00.00 </span> <br>
            Telephone : <span>77.400.00.00 </span> 

        </p>
        <!-- <p class="p">Vous avez oubliè votre mot de passe ? <a href="mdp.php">cliquez ici</a></p> -->
    </form>
    
</body>
</html>