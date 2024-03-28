<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
        include'./header.php';
        include'./db.php';

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $age = $_POST['age'];
        $club = $_POST['club'];

        $inserer = "INSERT INTO `mes_joueurs` (`prenom`,`nom`, `age`, `club`) VALUES ('$prenom','$nom', '$age', '$club')";

        if(mysqli_query($db,$inserer) == true){
            echo "<pre><h3>Enregistrement bien reussi</h3></pre>"; 
        }
            else
        {
        echo "Echec d'enregistrement";
        }



       
        echo "<br/>";

        header("location: listejoueur.php");



    ?>





</body>
</html>