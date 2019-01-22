
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="Shortcut Icon" href="image/logo.png">
    <title>ENABLE Administrator Portal</title>
    <link href="stylesheet/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
    <header>
        <img src="image/enable-banner.png" alt="ENABLE banner">
    </header>
    <nav>
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="topics.php">TOPICS</a></li>
            <li><a href="lecturer.php">LECTURES</a></li>
            <li><a href="https://enable.unc.edu/">ENABLE PROJECT</a></li>
            <li><a href="login.php">LOGIN</a></li>
        </ul>
    </nav>
    <section>
    <form method="post" action="login.php" class="form-signin">
        <h1>Please sign in</h1>
        <input type="text" name="uname" placeholder="username">
        <input type="password" name="upass" placeholder="password">
        <button type="submit" value="Log in">Log in</button>
        <p class="warning">
            <?php
            require "dbconnect.php";
            if (isset($_POST['uname']) && isset($_POST['upass'])) {
                // if username and password are both input
                // sanitize user input to prevent MySQL injection
                $uname = addslashes($_POST['uname']);
                $upass = sha1(addslashes($_POST['upass']));
                $sql = "SELECT uname FROM users WHERE uname='" . $uname . "' AND upass= '" . $upass . "'";

                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        // use super global variable to store user name?>

                        <script> window.location.href="home.php";</script>
                    
                    <?php
                    }
                }

                if (isset($_SESSION['valid_user'])) {
                    // direct to result page if the user is valid}
                    echo "hello";
                } else {
                    // failed to login, show warning message and prompt user to input right uname and pwd again
                    echo "Please enter right username and password";
                    exit;
                }
            }
            ?>
        </p>
    </form>
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
        </div>
    </footer>
</body>
</html>