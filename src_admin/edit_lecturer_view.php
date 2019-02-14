<?php   
    require "../dbconnect.php"; 
    $id = $_POST['id'];
    $name = '';
    $pronouns = '';
    $about = '';
    $url = '';

    // search the database to find record with this id. 
    $query = "SELECT * FROM lecturer WHERE lecturer_id = " . $id;
    if ($result = $mysqli->query($query)) {
        while ($row = $result ->fetch_assoc()) { 
            $name = $row["lecturer_name"];
            $pronouns = $row['pronouns'];
            $about = $row['about'];
            $url = $row['url'];
        }
    }
?>

<form action="src_admin/edit_lecturer_update.php" method="POST">
    <input name="lecturer-id" class="form-control" value="<?php echo $id; ?>" style="display: none"> 
    <div class="form-group">
        <label for="lecturer-name">Lecturer Name</label>
        <input class="form-control" name="lecturer-name" value="<?php echo $name; ?>">
    </div>
    <div class="form-group">
        <label for="lecturer-pronouns">Pronouns</label>
        <select class="form-control" name="lecturer-pronouns">
        <option value="" selected disabled hidden><?php echo $pronouns; ?></option>
        <option>He/Him/His</option>
        <option>She/Her/Hers</option>
        <option>Ze/Zir/Zirs</option>
        </select>
    </div>
    <div class="form-group">
        <label for="lecturer-about">Short Bio</label>
        <textarea class="form-control" name="lecturer-about" rows="3">
            <?php echo $about; ?>
        </textarea>
    </div>
    <div class="form-group">
        <label for="lecturer-url">Portfolio Website</label>
        <input class="form-control" name="lecturer-url" value="<?php echo $url; ?>">
    </div>
    <div class="form-group">
        <label for="lecturer-photo">Upload Headpic</label>
        <input type="file" class="form-control-file" id="lecturer-photo">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>