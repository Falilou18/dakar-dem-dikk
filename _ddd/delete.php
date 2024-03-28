<?php

include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($db, "delete from mes_joueurs where id =$id");

header("Location:listejoueur.php");
?>