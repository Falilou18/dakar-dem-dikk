<?php

include'./db.php';


    $email= $_POST['email'];
    $password= $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
  
   

$inserer = "INSERT INTO `cordonnees` (`email`, `password`, `confirmpassword`) VALUES ('$email', '$password', '$confirmpassword')";

if(mysqli_query($db,$inserer) == true){
    echo "<pre><h3>Enregistrement bien reussi</h3></pre>"; 
    header("location: acceuil.php");
}
    else
{
echo "Echec d'enregistrement";
}


echo "<br/>";

    


?>