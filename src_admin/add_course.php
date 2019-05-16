<?php 
    require "../dbconnect.php";
    // get user input via POST super variable.
    $name = $_POST['course-name'];
    $topic = $_POST['course-topic'];
    $overview = $_POST['course-description'];
    $slide = $_POST['course-slide'];

    // Get topic id via topic name.
    $check_topic = "SELECT * FROM curriculum WHERE topic_name = " . $topic;
    if ($mysqli->query($add_topic)) { 
        
    }

    // ADD new record to the database, TABLE curriculum.
    $add_course  = "INSERT INTO course (course_name, topic_id, overview, 
        slide_link)" .
        "VALUES ('" . $name . "','" . $topic_id . "','" . $overview. 
        "','" . $slide . "')";

    if ($mysqli->query($add_topic)) {
        echo "Course added successfully.";
        echo "<a href='../admin.php'>Back to admin portal.</a>";
    }
?>