<?php
include 'db.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $club = $_POST['club'];


    // Mettre à jour les informations de l'étudiant dans la base de données
    $sql = "UPDATE mes_joueurs SET prenom='$prenom', nom='$nom', 
    age='$age', club='$club' WHERE id=$id";

    if (mysqli_query($db,$sql)) {
        echo "Étudiant mis à jour avec succès";
        header("Location: listejoueur.php");
    } else {
        echo "Erreur: " . $sql . "<br>";
    }
} else {
    echo "Aucun identifiant d'étudiant spécifié";
}

mysqli_close($conn);
?>
