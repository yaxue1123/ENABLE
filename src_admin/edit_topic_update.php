<?php 
    require "../dbconnect.php";
    // get user input via POST super variable.
    $id = $_POST["topic-id"];
    $t_name = $_POST['topic-name'];
    $t_year = $_POST['topic-year'];
    $t_lecturer = $_POST['topic-lecturer'];
    $t_description = $_POST['topic-description'];
    $t_requirement = $_POST['topic-requirement'];

    // Update record to the database, TABLE curriculum.
    $update_topic  = "UPDATE curriculum " .
        "SET topic_name = '" . $t_name .
        "', " . "year = '" . $t_year .
        "', " . "lecturer = '" . $t_lecturer .
        "', " . "topic_description = '" . $t_description .
        "', " . "requirements = '" . $t_requirement .
        "' WHERE topic_id = " . $id;

    if ($mysqli->query($update_topic)) {
        echo "Topic updated successfully.";
        echo "<a href='../admin.php'>Back to admin portal.</a>";
    }
?>