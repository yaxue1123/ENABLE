<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="Shortcut Icon" href="image/logo.png">
<title>ENABLE Topic</title>
<link href="stylesheet/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Spectral|Rajdhani|Raleway">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<header>
    <img src="image/enable-banner.png" alt="ENABLE banner">
</header>
<nav>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="topics.php">Topics</a></li>
        <li><a href="lecturer.php">Lecturers</a></li>
        <li><a href="https://enable.unc.edu/">ENABLE Project</a></li>
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
                }
            }
        ?>
        <p>
            This course aims at helping students to gain experience with both theoritical
            and practical knowledge about text mining. The content covers text representation, 
            feature selection, algorithms, evaluation and clustering. Multiple training and tesing 
            data sets are provided along with text mining tools built in Python.
        </p>
        <h2>Course Materials</h2>
        <p>Download zip file of all slides, data sets and tools here.</p>
        <a href="materials/text-mining.zip" download>text-mining.zip</a>
    </div>
    <div id="show-syllabus" class="show-course">
        <h1>Syllabus</h1>
        <h2>Lecturer</h2>
        <p>
            Heejun Kim, Ph.D. candidate at the School of Information and Library Science at University
            of North Carolina at Chapel Hill.
        </p>
        <h2>Description</h2>
        <p>
            Changes in technology and publishing practices have eased the task of recording and sharing 
            textual information electronically. This increased quantity of information has spurred the 
            development of a new field called text mining. The overarching goal of this new field is to
                use computers to automatically learn new things from textual data.
        </p>
        <h2>Requirements</h2>
        <p>
            Students should have a reasonable programming background and be able to design, implement,
            debug and test medium sized programs.
        </p>
        <h2>Grading</h2>
        <p>
            10% Class participation <br>
            40% Homework <br>
            50% Project <br>
        </p>
    </div>
    <div id="show-session" class="show-course">
        <h1>Sessions</h1>
        <table>
            <tr>
                <td>Lecture 1</td>
                <td><a href="demo_course.html">Introduction to Text Mining</a></td>
            </tr>
            <tr>
                <td>Lecture 2</td>
                <td>Predictive Analysis of Text: Concepts, Instances, and Classifiers</td>
            </tr>
            <tr>
                <td>Lecture 3</td>
                <td>Text Representation</td>
            </tr>
            <tr>
                <td>Lecture 4</td>
                <td>Feature Selection</td>
            </tr>
            <tr>
                <td>Lecture 5</td>
                <td>Naive Bayes Algorithm</td>
            </tr>
            <tr>
                <td>Lecture 6</td>
                <td>Instance-Based Learning Algorithm</td>
            </tr>
            <tr>
                <td>Lecture 7</td>
                <td>Evaluation</td>
            </tr>
            <tr>
                <td>Lecture 8</td>
                <td>Clustering</td>
            </tr>        
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