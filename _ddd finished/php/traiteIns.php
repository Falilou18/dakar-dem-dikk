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

        // $id_carte = null;


        $inserer = "INSERT INTO `personnel2` (`prenom`,`nom`, `age`,`nom_ligne` ) VALUES ('$prenom','$nom', '$age', 'null')";

        if(mysqli_query($db,$inserer) == true){
            echo "<pre><h3>Enregistrement bien reussi</h3></pre>"; 
        }
            else
        {
        echo "Echec d'enregistrement";
        }



       
        echo "<br/>";

        header("location: inscr2.php");



    ?>





</body>
</html>