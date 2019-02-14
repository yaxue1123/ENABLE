<?php 
    require "../dbconnect.php";
    // get user input via POST super variable.
    $id = $_POST["lecturer-id"];
    $name = $_POST['lecturer-name'];
    $pronouns = $_POST['lecturer-pronouns'];
    $about = $_POST['lecturer-about'];
    $url= $_POST['lecturer-url'];

    // Update record to the database, TABLE curriculum.
    $update_lecturer  = "UPDATE lecturer " .
        "SET lecturer_name = '" . $name .
        "', " . "pronouns = '" . $pronouns .
        "', " . "about = '" . $about .
        "', " . "url = '" . $url .
        "' WHERE lecturer_id = " . $id;

    if ($mysqli->query($update_lecturer)) {
        echo "lecturer updated successfully.";
        echo "<a href='../admin.php'>Back to admin portal.</a>";
    }
?>