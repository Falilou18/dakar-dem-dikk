<?php
    
    try {
        $db = mysqli_connect("localhost","root","root","ddd");

        
    } 
    
    catch (Exception $th) {
        echo "l'erreur est : " + $th->getMessage();
    }






?>