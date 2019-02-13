<?php   
    require "../dbconnect.php"; 
    $id = $_POST['id'];
    $name = '';
    $lecturer = '';
    $description = '';
    $requirement = '';
    $grading = '';
    // search the database to find record with this id. 
    $query = "SELECT * FROM `curriculum` WHERE topic_id = " . $id;
    if ($result = $mysqli->query($query)) {
        while ($row = $result ->fetch_assoc()) { 
            $name = $row["topic_name"];
            $lecturer = $row['lecturer'];
            $description = $row['topic_description'];
            $requirement = $row['requirements'];
            $grading = $row['grading'];
        }
    }
?>

<form action="src_admin/edit_topic_update.php" method="POST">  
    <div class="form-group">
        <label for="topic-name">Topic Name</label>
        <input name="topic-name" class="form-control" value="<?php echo $name; ?>">
    </div>
    <div class="form-group">
        <label for="topic-lecturer">Lecturer</label>
        <select class="form-control" name="topic-lecturer" value="<?php echo $name; ?>">
        <?php
            $query_list_lecturer = "SELECT * FROM lecturer";
            if ($result_list_lecturer = $mysqli->query($query_list_lecturer )) {
                while ($row_list_lecturer = $result_list_lecturer->fetch_assoc()) { 
                    echo "<option id='lecturer-list-" . $row_list_lecturer["lecturer_id"] ."'>" . 
                        $row_list_lecturer['lecturer_name'] . "</option>";
                }
            }
        ?>
        </select>
    </div>
    <div class="form-group">
        <label for="topic-description">Description</label>
        <textarea class="form-control" name="topic-description" rows="3">
            <?php echo $description; ?>
        </textarea>
    </div>
    <div class="form-group">
        <label for="topic-requirement">Requirements</label>
        <textarea class="form-control" name="topic-requirement" rows="3">
            <?php echo $requirement; ?>
        </textarea>
    </div>
    <div class="form-group">
        <label for="topic-grade">Grading Criteria</label>
        <textarea class="form-control" name="topic-grading" rows="3">
            <?php echo $grading; ?>
        </textarea>
    </div>
    <div class="form-group">
        <label for="topic-material">Upload Topic Materials</label>
        <input type="file" class="form-control-file" id="topic-material">
    </div>
    <button id="btn-add-topic" type="submit" class="btn btn-primary">Update</button>
</form>