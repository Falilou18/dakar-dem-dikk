<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="modifier.css">
</head>
<body>
    <?php
        include'./db.php';

        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            
            $sql = "SELECT * FROM mes_joueurs WHERE id=$id";
            $result = mysqli_query($db,$sql);
            if (mysqli_num_rows($result) > 0) {
                $row = $result->fetch_assoc();
                $prenom = $row['prenom'];
                $nom = $row['nom'];
                $age = $row['age'];
                $club = $row['club'];

            } else {
                echo "Aucun étudiant trouvé";
            }
        } else {
            echo "Aucun identifiant d'étudiant spécifié";
        }

        ?>

    
    <form action="update.php" method="post" name="form1">
        <h4>Modifier Joueur</h4>
        <hr>

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom" value=<?php echo $prenom ; ?>
        >
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value=<?php echo $nom ; ?>>

        <label for="age">Age</label>
        <input type="text" name="age" id="age" value=<?php echo $age ; ?>>

        <label for="club">Club</label>
        <input type="text" name="club" id="club" value=<?php echo $club ; ?>>
       
        <input type="submit" value="Modifier">
    </form>
		
	</form>
</body>
</html>