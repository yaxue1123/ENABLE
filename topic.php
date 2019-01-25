<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="Shortcut Icon" href="image/logo.png">
    <title>ENABLE Online Learning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="stylesheet/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <img src="image/enable-banner.png" alt="ENABLE banner">
</header>
<nav>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="home.php">HOME</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="topics.php" role="button" aria-haspopup="true" aria-expanded="false">TOPICS</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">TEXT MINING</a>
            <a class="dropdown-item" href="#">GENOMICS</a>
            <a class="dropdown-item" href="#">MEDICAL IMAGING</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="topics.php">ALL TOPICS</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="lecturer.php">LECTURERS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://enable.unc.edu/">ENABLE PROJECT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">LOGIN</a>
        </li>
    </ul>
</nav>
<section>
    <?php 
        require "dbconnect.php";
        $topic_id = $_GET['topic'];
        $query = "SELECT * FROM curriculum WHERE topic_id = " . $topic_id;
        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) { 
                echo "<h1 class='topic-head'>Topic: " . $row['topic_name'] . "</h1>";
            }
        }
    ?>
    <div class="topic-nav">
        <ul>
            <li>ABOUT</li>
            <li>SYLLABUS</li>
            <li>SESSIONS</li>
            <li>DATA</li>
            <li>TOOLS</li>
        </ul>
    </div>

    <div id="show-about" class="show-course">
        <img src="image/text-mining.jpg" alt="text mining" class="topic-img">
        <h2>About the Course</h2>
        <?php 
            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) { 
                    echo "<p>" . $row['about']. "</p>";
                    // --------- Course material ----------
                    echo "<h2>Course Materials</h2>" . 
                        "<p>Download zip file of all slides, data sets and tools here.</p>";
                    echo "<a href='materials/topic-". $row['topic_id'] .
                        ".zip' download>topic-" . $row['topic_id'] . ".zip</a>";
                }
            }
        ?>
    </div>
    <div id="show-syllabus" class="show-course">
        <h1>Syllabus</h1>
        <h2>Lecturer</h2>
        <?php 
            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) { 
                    echo "<p>" . $row['lecturer']. ". " . $row['lecturer_description'] ."</p>";
                    // --------- Description ----------
                    echo "<h2>Description</h2>";
                    echo "<p>" . $row['topic_description'] . "</p>";
                    // --------- Requirements ----------
                    echo "<h2>Requirements</h2>";
                    echo "<p>". $row['requirements'] ."</p>";
                    // --------- Grading ----------
                    echo "<h2>Grading</h2>";
                    echo "<p>". $row['grading'] ."</p>";
                }
            }
        ?>
    </div>
    <div id="show-session" class="show-course">
        <h1>Sessions</h1>
        <table>
            <?php 
                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) { 
                        $query2 = "SELECT * FROM course WHERE topic_id = " . $row['topic_id'];
                        $index = 1;
                        if ($result2 = $mysqli->query($query2)) {
                            while ($row2 = $result2->fetch_assoc()) {
                                echo "<tr><td>Lecture " . $index . "</td>";
                                echo "<td><a href='course.php?course=" . $row2['course_id'] . "'>" . 
                                     $row2['course_name'] . "</a></td></tr>"; 
                                $index += 1;
                            }
                        }
                    }
                }
            ?>         
        </table>
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
        <p>Copyright © 2018 ENABLE</p>
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
    </div>
</footer>
<script>
    $(document).ready(() => {
        $(".topic-nav ul li:first-child").css("text-decoration", "overline");

        $(".topic-nav li").click(function() {
            // remove former style.
            $(".show-course").css("display", "none");
            $("ul li").css("text-decoration", "none");
            // hightlight selected li and show section accordingly.
            $(this).css("text-decoration", "overline");
            switch ($(this).text()) {
                case 'ABOUT': 
                    $("#show-about").css("display", "block");
                    break;
                case 'SYLLABUS':
                    $("#show-syllabus").css("display", "block");
                    break;
                case 'SESSIONS':
                    $("#show-session").css("display", "block");
                    break;
            }            
        })
    });
</script>
</body>
</html>