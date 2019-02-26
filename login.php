
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="Shortcut Icon" href="image/logo.png">
    <title>ENABLE Administrator Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="stylesheet/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body class="text-center">
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
                    <a class="dropdown-item" href="topics.php?year=2018">YEAR 2018</a>
                    <a class="dropdown-item" href="topics.php?year=2019">YEAR 2019</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="topics.php?year=all">ALL TOPICS</a>
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
        <form method="post" action="login.php" class="form-signin">
            <h2 class="font-weight-light">Log in as lecturer or administrator.</h2>
            <input type="text" name="uname" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
            <input type="password" name="upass" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" value="Log in">LOG IN</button>
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

                            <script> window.location.href="admin.php";</script>
                        
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