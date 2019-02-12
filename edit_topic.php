<?php 
    require "dbconnect.php";
    $op = $_POST['op'];
    $id = $_POST['id'];

    if($op == "delete") {
        // remove a topic. - DELETE
        $query = "DELETE FROM curriculum WHERE topic_id = " . $id;
    } else if ($op == "edit") {
        // edit a topic. - UPDATE
        $query = "";
    }

    $mysqli->query($query);
?>