<?php 
    require "../dbconnect.php";
    $id = $_POST['id'];
    $query = "DELETE FROM lecturer WHERE lecturer_id = " . $id;
    $mysqli->query($query);
?>