<?php

include'./db.php';
session_start();

    $email= $_POST['email'];
    $password= $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $admine = $_POST['admin'];
    // $_SESSION['admin'] = $_POST['admin'];
    // echo $_SESSION['admin'];

$inserer = "INSERT INTO `mes_utilisateurs` (`email`, `password`, `confirmpassword`,`admin`) VALUES ('$email', '$password', '$confirmpassword', `$admine`)";

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