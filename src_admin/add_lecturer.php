<?php 
    require "../dbconnect.php";
    // get user input via POST super variable.
    $name = $_POST['lecturer-name'];
    $pronouns = $_POST['lecturer-pronouns'];
    $about = $_POST['lecturer-about'];
    $url = $_POST['lecturer-url'];

    // ADD new record to the database, TABLE lecturer.
    $add_lecturer  = "INSERT INTO  lecturer (lecturer_name, pronouns, 
        about, url)" .
        "VALUES ('" . $name . "','" . $pronouns . 
        "','" . $about . "','" . $url . "')";

    if ($mysqli->query($add_lecturer)) {
        echo "Lecturer added successfully.";
        echo "<a href='../admin.php'>Back to admin portal.</a>";
    }
?>