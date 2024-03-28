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
        $tel = $_POST['tel'];
        $bus = $_POST['bus'];

        $inserer = "INSERT INTO `carte2` (`prenom`,`nom`, `numero`, `bus`) VALUES ('$prenom','$nom', '$tel', '$bus')";

        if(mysqli_query($db,$inserer) == true){
            echo "<pre><h3>Enregistrement bien reussi</h3></pre>"; 
        }
            else
        {
        echo "Echec d'enregistrement";
        }



       
        echo "<br/>";

        header("location: contact.php");



    ?>





</body>
</html>