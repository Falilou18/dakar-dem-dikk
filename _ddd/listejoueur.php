<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Joueurs</title>
    <link rel="stylesheet" href="./listejoueur.css">


</head>
<body>
   <form action="#" method="get">
        <div class="recherche">
            <!-- <input type="search" name="recherche" id="recherche" > -->
        </div>

    </form>

    

    


<table>
        <thead >
            <th>Prenom</th>
            <th>Nom</th>
            <th>Age</th>
            <th>Club</th>
            <th colspan="3">Action</th>     
        </thead>
    <?php
            include'./header.php';
            include'./db.php';
            session_start();

                $affichage = "SELECT * FROM mes_joueurs";
                $resultat = mysqli_query($db,$affichage);


            foreach ($resultat as $value) {
                echo "<tr>";
                echo "<td>". $value['prenom']. "</td>";
                echo "<td>". $value['nom']. "</td>";
                echo "<td>". $value['age']. "</td>";
                echo "<td>". $value['club']. "</td>";


                echo "<td><a class='modifier' href=\"modifier.php?id=$value[id]\">Modifier</a></td>";
                echo "<td><a class='supprimer' href=\"delete.php?id=$value[id]\"
                    onClick=\"return confirm('Etes vous sur ?')\">Supprimer</a></td>";    
                echo "<td><a class='ajouter' href=\"./ajout.php\">Ajouter</a></td>";

                echo "</tr>"; 

           
            }

            echo $_SESSION['admin'];
        

          ?>



    </table>
    

  
    
</body>
</html>