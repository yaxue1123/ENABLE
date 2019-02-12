<?php 
    require "dbconnect.php";
    // get user input via POST super variable.
    $t_name = $_POST['name'];
    $t_lecturer = $_POST['lecturer'];
    $t_description = $_POST['description'];
    $t_requirement = $_POST['requirement'];
    $t_grading = $_POST['grading'];

    // ADD new record to the database, TABLE curriculum.
    $query  = "INSERT INTO curriculum (topic_name, lecturer, 
        topic_description, requirements, grading)" .
        "VALUES ('" . $t_name . "','" . $t_lecturer . "','" . $t_description . 
        "','" . $t_requirement . "','" . $t_grading . "')";

    $mysqli->query($query);
?>