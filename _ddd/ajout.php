<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Joueur</title>
    <link rel="stylesheet" href="ajout.css">
</head>
<body>
<form action="./traiteAjout.php" method="post">
        <h4>Ajouter Joueur</h4>
        <hr>

        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom">

        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">

        <label for="age">Age</label>
        <input type="text" name="age" id="age">

        
       
        <input type="submit" value="Ajouter">
    </form>

    
</body>
</html>