<?php 
    require "../dbconnect.php";
    // get user input via POST super variable.
    $name = $_POST['lecturer-name'];
    $pronouns = $_POST['lecturer-pronouns'];
    $about = $_POST['lecturer-about'];
    $url = $_POST['lecturer-url'];

    // ADD new record to the database, TABLE lecturer.
    $add_lecturer  = "INSERT INTO  lecturer (lecturer_name, pronouns, 
        about, url)" . "VALUES ('" . $name . "','" . $pronouns . 
        "','" . $about . "','" . $url . "')";

    if ($mysqli->query($add_lecturer)) {
        echo "Lecturer added successfully.";
        echo "<a href='../admin.php'>Back to admin portal.</a>";
    }

    // upload head pic.
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["lecturer-photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["lecturer-photo"]["hahaha"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
?>