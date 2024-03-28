<?php

include'./db.php';
session_start();


    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

$inserer = "INSERT INTO `mes_motdepasse` (`password`, `confirmpassword`) VALUES ('$password', '$confirmpassword')";

if(mysqli_query($db,$inserer) == true){
    echo "<pre><h3>Enregistrement bien reussi</h3></pre>"; 
}
    else
{
echo "Echec d'enregistrement";
}


echo "<br/>";

    header("location: acceuil.php");


?>