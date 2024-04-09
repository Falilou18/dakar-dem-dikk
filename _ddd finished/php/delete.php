<?php

include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($db, "delete from carte2 where id =$id");

header("Location:tableau.php");
?>