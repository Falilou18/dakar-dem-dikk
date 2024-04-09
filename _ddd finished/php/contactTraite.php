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
        $email = $_POST['email'];
        $comment = $_POST['comment'];


        $inserer = "INSERT INTO `contact` (`prenom`,`email`, `comment`) VALUES ('$prenom','$email', '$comment')";

        if(mysqli_query($db,$inserer) == true){
            echo "<pre><h3>Enregistrement bien reussi</h3></pre>"; 
            header("location: tableau.php");
        }
            else
        {
        echo "Echec d'enregistrement";
        }



       
        echo "<br/>";




    ?>





</body>
</html>