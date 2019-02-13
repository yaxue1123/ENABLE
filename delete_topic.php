<?php 
    require "dbconnect.php";
    $id = $_POST['id'];
    $query = "DELETE FROM curriculum WHERE topic_id = " . $id;
    $mysqli->query($query);
?>