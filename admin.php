<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="Shortcut Icon" href="image/logo.png">
    <title>ENABLE Online Learning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link href="stylesheet/style.css" rel="stylesheet">
    <script>
        // when the DOM is ready, execute the JQuery code.
        $(document).ready(function() { 
            // delete a topic.
            $(".delete-topic").click(function(){
                // retrieve topic id from button id.
                // topic-delete-id.
                let id = $(this).attr('id').replace("topic-delete-","");
                $.post('src_admin/delete_topic.php',
                    {
                        id: id
                    },
                    function (data, status) {
                        // show success message.
                        $("body")
                            .html("Topic deleted successfully.<a href='admin.php'>Back to admin portal.</a>");
                    }
                );
            });

            // delete a lecturer.
            $(".delete-lecturer").click(function(){
                // retrieve lecturer id from button id.
                // lectuer-delete-id.
                let id = $(this).attr('id').replace("lecturer-delete-","");
                $.post('src_admin/delete_lecturer.php',
                    {
                        id: id
                    },
                    function (data, status) {
                        // show success message.
                        $("body")
                            .html("Lecturer deleted successfully.<a href='admin.php'>Back to admin portal.</a>");
                    }
                );
            });

            // edit a topic.
            $(".edit-topic").click(function(){ 
                let id = $(this).attr('id').replace("topic-edit-","");
                $.post('src_admin/edit_topic_view.php',
                    {
                        id: id
                    },
                    function (data, status) {
                        // show selected topic's info.
                        $("#v-pills-edit-topic").html(data);
                    }
                );
            });

            // edit a lecturer.
            $(".edit-lecturer").click(function(){ 
                console.log("hahaha");
                let id = $(this).attr('id').replace("lecturer-edit-","");
                console.log(id);
                $.post('src_admin/edit_lecturer_view.php',
                    {
                        id: id
                    },
                    function (data, status) {
                        // show selected lecturer's info.
                        $("#v-pills-edit-lecturer").html(data);
                    }
                );
            });

        });
    </script>
</head>
<body>
    <header>
        <img src="image/enable-banner.png" alt="ENABLE banner">
    </header>
    <nav>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">HOME</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="topics.php" role="button" aria-haspopup="true" aria-expanded="false">TOPICS</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="topics.php?year=2019">YEAR 2019</a>
                    <a class="dropdown-item" href="topics.php?year=2018">YEAR 2018</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="topics.php" role="button" aria-haspopup="true" aria-expanded="false">SCHEDULET</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="https://enable.unc.edu/boot-camp-day-by-day-schedule/">YEAR 2019</a>
                    <a class="dropdown-item" href="https://enable.unc.edu/2018-hidav-participants/">YEAR 2018</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://learnonline.chip.unc.edu:8000/hub/login">JUPYTERHUB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lecturer.php">LECTURERS</a>
            </li>
        </ul>
    </nav>
    <section class="admin-view">
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-add-topic-tab" data-toggle="pill" href="#v-pills-add-topic" role="tab" aria-controls="v-pills-add-topic" aria-selected="true">Add Topic</a>
                    <a class="nav-link" id="v-pills-edit-topic-tab" data-toggle="pill" href="#v-pills-edit-topic" role="tab" aria-controls="v-pills-edit-topic" aria-selected="false">Edit Topic</a>
                    <a class="nav-link" id="v-pills-add-course-tab" data-toggle="pill" href="#v-pills-add-course" role="tab" aria-controls="v-pills-add-course" aria-selected="false">Add Course</a>
                    <a class="nav-link" id="v-pills-edit-course-tab" data-toggle="pill" href="#v-pills-edit-course" role="tab" aria-controls="v-pills-edit-course" aria-selected="false">Edit Course</a>
                    <a class="nav-link" id="v-pills-add-lecturer-tab" data-toggle="pill" href="#v-pills-add-lecturer" role="tab" aria-controls="v-pills-add-lecturer" aria-selected="false">Add Lecturer</a>
                    <a class="nav-link" id="v-pills-edit-lecturer-tab" data-toggle="pill" href="#v-pills-edit-lecturer" role="tab" aria-controls="v-pills-edit-lecturer" aria-selected="false">Edit Lecturer</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-add-topic" role="tabpanel" aria-labelledby="v-pills-add-topic-tab">        
                        <form action="src_admin/add_topic.php" method="POST">
                            <div class="form-group">
                                <label for="topic-name">Topic Name</label>
                                <input name="topic-name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="topic-year">Year</label>
                                <input name="topic-year" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="topic-lecturer">Lecturer</label>
                                <select class="form-control" name="topic-lecturer">
                                <?php
                                    require "dbconnect.php";
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
                                <textarea class="form-control" name="topic-description" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="topic-requirement">Requirements</label>
                                <textarea class="form-control" name="topic-requirement" rows="3"></textarea>
                            </div>
                            <button id="btn-add-topic" type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-edit-topic" role="tabpanel" aria-labelledby="v-pills-edit-topic-tab">
                        <table class="table table-bordered">
                            <tr>
                                <td>Topic</td>
                                <td>Year</td>
                                <td>Lecturer</td>
                                <td>Edit</td>
                            </tr>
                            <?php
                                $query_edit_topic = "SELECT * FROM curriculum";
                                if ($result_edit_topic = $mysqli->query($query_edit_topic)) {
                                    while ($row_edit_topic = $result_edit_topic->fetch_assoc()) {
                                        // --------- Topic Name ----------
                                        echo "<tr><td><a href=topic.php?topic=" . $row_edit_topic['topic_id'] . ">" . $row_edit_topic['topic_name'] . "</a></td>";
                                        // --------- Topic Year ----------
                                        echo "<td><a>" . $row_edit_topic['year'] . "</a></td>";
                                        // --------- Topic Lecturer ----------
                                        echo "<td>" . $row_edit_topic['lecturer'] . "</td>";
                                        // --------- Edit Button ----------
                                        echo"<td><button class='btn btn-primary edit-topic' id='topic-edit-" . $row_edit_topic['topic_id'] . "'>". "Edit</button>";
                                        // --------- Delete Button ----------
                                        echo"<button class='btn btn-primary delete-topic' id='topic-delete-" . 
                                        $row_edit_topic['topic_id'] . "'>". "Delete</button></td></tr>";
                                    }
                                }
                            ?>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="v-pills-add-course" role="tabpanel" aria-labelledby="v-pills-add-course-tab">
                        <form>
                            <div class="form-group">
                                <label for="course-name">Course Name</label>
                                <input class="form-control" id="course-name">
                            </div>
                            <div class="form-group">
                                <label for="course-topic">Topic</label>
                                <select class="form-control" id="course-topic">
                                <?php
                                    if ($result_edit_topic = $mysqli->query($query_edit_topic)) {
                                        while ($row_edit_topic = $result_edit_topic->fetch_assoc()) {
                                            // --------- Topic Name ----------
                                            echo "<option>" . $row_edit_topic['topic_name'] . "</option>";
                                        }
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="course-description">Overview Description</label>
                                <textarea class="form-control" id="course-description" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="course-slide">Slide Link from OneDrive</label>
                                <input class="form-control" id="course-slide" rows="3"></input>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-edit-course" role="tabpanel" aria-labelledby="v-pills-edit-course-tab">
                        <table class="table table-bordererd">
                            <tr>
                                <td>Topic</td>
                                <td>Course</td>
                                <td>Edit</td>
                            </tr>
                            <?php
                                    if ($result_edit_topic = $mysqli->query($query_edit_topic)) {
                                        while ($row_edit_topic = $result_edit_topic->fetch_assoc()) {
                                            $query_edit_course = "SELECT * FROM course WHERE topic_id = " . $row_edit_topic['topic_id'];
                                            $query_course_number = "SELECT count(*) FROM course WHERE topic_id = " . $row_edit_topic['topic_id'];
                                            $course_number = $mysqli->query($query_course_number)->fetch_assoc()['count(*)']; // number of all courses in this topic.
                                            
                                            // --------- Topic Name ----------                           
                                            echo "<tr style='width: 20%'><td rowspan='" . (int)$course_number . "'><a href=topic.php?topic=" . 
                                                $row_edit_topic['topic_id'] . ">" . $row_edit_topic['topic_name'] . "</a></td>"; 
                                            
                                            if ($result_edit_course = $mysqli->query($query_edit_course)) {
                                                while ($row_edit_course = $result_edit_course->fetch_assoc()) { 
                                                    // --------- Courses----------
                                                    echo "<td style='width: 55%'>" . $row_edit_course['course_name'] . "</td>";
                                                    // --------- Edit Button ----------
                                                    echo"<td style='width: 25%'><button class='btn btn-primary' id='course-edit-" . 
                                                        $row_edit_course['course_id'] . "'>". "Edit</button>";
                                                    // --------- Delete Button ----------
                                                    echo"<button class='btn btn-primary' id='course-delete-" . 
                                                        $row_edit_course['course_id'] . "'>". "Delete</button></td></tr>";
                                                }
                                            }
                                        }
                                    }
                            ?>
                        </table>    
                    </div>
                    <div class="tab-pane fade" id="v-pills-add-lecturer" role="tabpanel" aria-labelledby="v-pills-add-lecturer-tab">
                        <form action="src_admin/add_lecturer.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="lecturer-name">Lecturer Name</label>
                                <input class="form-control" name="lecturer-name">
                            </div>
                            <div class="form-group">
                                <label for="lecturer-pronouns">Pronouns</label>
                                <select class="form-control" name="lecturer-pronouns">
                                <option>He/Him/His</option>
                                <option>She/Her/Hers</option>
                                <option>Ze/Zir/Zirs</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lecturer-about">Short Bio</label>
                                <textarea class="form-control" name="lecturer-about" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="lecturer-url">Portfolio Website</label>
                                <input class="form-control" name="lecturer-url">
                            </div>
                            <div class="form-group">
                                <label for="lecturer-photo">Upload Headpic</label>
                                <input type="file" class="form-control-file" name="lecturer-photo" id="lecturer-photo">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-edit-lecturer" role="tabpanel" aria-labelledby="v-pills-edit-lecturer-tab">
                        <table class="table table-bordered">
                            <tr>
                                <td>Lecturer</td>
                                <td>Edit</td>
                            </tr>
                            <?php
                                $query_edit_lecturer = "SELECT * FROM lecturer";
                                if ($result_edit_lecturer = $mysqli->query($query_edit_lecturer)) {
                                    while ($row_edit_lecturer = $result_edit_lecturer->fetch_assoc()) {
                                        // --------- Lectuerer Name ----------
                                        echo "<tr><td>" . $row_edit_lecturer['lecturer_name'] . "</td>";
                                        // --------- Edit Button ----------
                                        echo"<td><button class='btn btn-primary edit-lecturer' id='lecturer-edit-" . 
                                            $row_edit_lecturer['lecturer_id'] . "'>". "Edit</button>";
                                        // --------- Delete Button ----------
                                        echo"<button class='btn btn-primary delete-lecturer' id='lecturer-delete-" . 
                                            $row_edit_lecturer['lecturer_id'] . "'>". "Delete</button></td></tr>";
                                    }
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-col1">
            <a href="https://chip.unc.edu/">
                <img src="image/chip-banner.png" alt="CHIP banner" height="40px">
            </a>
            <p>
                This program is funded by United Health Foundation.
            </p>
            <a href="http://www.unitedhealthfoundation.org/">
                <img src="image/uhf-banner.png" alt="UHF banner" height="40px">
            </a>
            <p>
                <a href="https://twitter.com/Enable_UNC/" class="footer-icon"><i class="fab fa-twitter-square fa-2x"></i></a>
                <a href="https://www.facebook.com/unc.enable/" class="footer-icon"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a href="https://www.instagram.com/enable.unc/" class="footer-icon"><i class="fab fa-instagram fa-2x"></i></a>
            </p> 
            <p>Copyright © 2019 ENABLE</p>
        </div>
        <div class="footer-col2">
            <p>
                Mailing Address: <br>
                Carolina Health Informatics Program <br>
                100 Manning Hall <br>
                Chapel Hill, NC USA <br>
                27599-3360 <br>
            </p>
            <p>Email: enable@unc.edu</p>
            <p>Phone: 919.962.2208</p>
            <a class="btn btn-second" href="login.php">Admin Login</a>
        </div>
    </footer>
</body>
</html> 