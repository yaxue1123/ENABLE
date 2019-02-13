<?php 
    require "../dbconnect.php";
    // get user input via POST super variable.
    $t_name = $_POST['topic-name'];
    $t_lecturer = $_POST['topic-lecturer'];
    $t_description = $_POST['topic-description'];
    $t_requirement = $_POST['topic-requirement'];
    $t_grading = $_POST['topic-grading'];

    // Update record to the database, TABLE curriculum.
    $update_topic  = "UPDATE curriculum " .
        "SET topic_name = '" . $t_name .
        "', " . "lecturer = '" . $t_lecturer .
        "', " . "topic_description = '" . $t_description .
        "', " . "requirements = '" . $t_requirement .
        "', " . "grading = '" . $t_grading .
        "' WHERE topic_id = 1";
    
        echo $update_topic;

        // " (topic_name, lecturer, 
        // topic_description, requirements, grading)" .
        // "VALUES ('" . $t_name . "','" . $t_lecturer . "','" . $t_description . 
        // "','" . $t_requirement . "','" . $t_grading . "')";

    if ($mysqli->query($update_topic)) {
        echo "Topic updated successfully.";
        echo "<a href='../admin.php'>Back to admin portal.</a>";
    }
?>