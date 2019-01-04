<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="Shortcut Icon" href="image/logo.png">
    <title>ENABLE Lecturers</title>
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
        <h1 class="topic-head">Lecturers</h1>
        <div class="lecturer-2-col">
            <?php
                require "dbconnect.php";
                $query = "SELECT * FROM lecturer";
                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<img src='./image/lecturer/lecturer" . $row['lecturer_id'] . ".jpg'>";
                        echo "<div><h2>" . $row['lecturer_name'] . "</h2>";
                        echo "<p>" . $row['about'];
                        if ($row['url'] != "") {
                            echo "<a href='" . $row['url'] . "'>View Portfolio</a>";
                        }
                        echo "</p></div>";
                    }
                }
            ?>
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
</body>
</html>