<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abonnement

    </title>
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
            <th>num_carte</th>
            <th>Nom Ligne</th>
            <th colspan="3">Action</th>     
        </thead>
    <?php
            include'./header.php';
            include'./db.php';

            if(isset($_GET['id'])) 
                $id = $_GET['id'];

                $affichage = 'SELECT nom_pays, prenom FROM pays INNER JOIN personne ON personne.id_pays = pays.id ';
                
                $affichage = "SELECT prenom,nom,carte.num_carte,carte.nom_ligne FROM personnel
                INNER JOIN carte ON carte.id=personnel.id_carte  WHERE personnel.id=$id";


    //WHERE pays.nom_pays = "usa"
                $resultat = mysqli_query($db,$affichage);

            

            foreach ($resultat as $value) {
                echo "<tr>";
                echo "<td>". $value['prenom']. "</td>";
                echo "<td>". $value['nom']. "</td>";
                echo "<td>". $value['num_carte']. "</td>";
                echo "<td>". $value['nom_ligne']. "</td>";



                // echo "<td><a class='modifier' href=\"modifier.php?id=$value[id]\">Modifier</a></td>";
                echo "<td><a class='supprimer' href=\"delete.php?id=$value[id]\"
                    onClick=\"return confirm('Etes vous sur ?')\">Annuler</a></td>";    
                // echo "<td><a class='ajouter' href=\"./ajout.php\">Ajouter</a></td>";
                // echo "<td><a class='ajouter' href=\"./tableau2.php\">Details Carte</a></td>";

                echo "</tr>"; 

            }
      
           
            


        

          ?>



    </table>
    

  
    
</body>
</html>