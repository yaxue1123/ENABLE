<?php 
    require "dbconnect.php";
    // get user input via POST super variable.
    $t_name = $_POST['topic-name'];
    $t_lecturer = $_POST['topic-lecturer'];
    $t_description = $_POST['topic-description'];
    $t_requirement = $_POST['topic-requirement'];
    $t_grading = $_POST['topic-grading'];

    // ADD new record to the database, TABLE curriculum.
    $add_topic  = "INSERT INTO curriculum (topic_name, lecturer, 
        topic_description, requirements, grading)" .
        "VALUES ('" . $t_name . "','" . $t_lecturer . "','" . $t_description . 
        "','" . $t_requirement . "','" . $t_grading . "')";

    if ($mysqli->query($add_topic)) {
        echo "Topic added successfully.";
        echo "<a href='admin.php'>Back to admin portal.</a>";
    }
?>