<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abonnnement</title>
    <link rel="stylesheet" href="../Css/tableau.css">


</head>
<body>

<div class="search-container">
    <!-- <input type="search" name="search" id="search"> -->
    
</div>
  
<table>
        <thead >
            <th>Prenom</th>
            <th>Nom</th>
            <th>Numero</th>
            <th>Adresse</th>
            <th colspan="3">Action</th>     
        </thead>
    <?php
            include'./header.php';
            include'./db.php';


                $affichage = "SELECT * FROM carte2";
                $resultat = mysqli_query($db,$affichage);


            foreach ($resultat as $value) {
                echo "<tr>";
                echo "<td>". $value['prenom']. "</td>";
                echo "<td>". $value['nom']. "</td>";
                echo "<td>". $value['numero']. "</td>";
                echo "<td>". $value['bus']. "</td>";


                // echo "<td><a class='modifier' href=\"modifier.php?id=$value[id]\">Modifier</a></td>";
                echo "<td><a class='supprimer' href=\"delete.php?id=$value[id]\"
                    onClick=\"return confirm('Etes vous sur ?')\">Annuler</a></td>";    
                // echo "<td><a class='ajouter' href=\"tableauCarte.php?id=$value[id]\">Details Carte</a></td>";
                // echo "<td><a class='ajouter' href=\"./tableauCarte.php\">Details Carte</a></td>";

                echo "</tr>"; 

           
            }


        

          ?>


            
    </table>
    <section style="margin-top: 15%;">
    <button ><a class='ajouter' href=./abonnement.php>Ajouter</a></button> 


       
    </section>
    

  
    
</body>
</html>