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
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="topics.php" role="button" aria-haspopup="true" aria-expanded="false">SCHEDULE</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="https://enable.unc.edu/boot-camp-day-by-day-schedule/">YEAR 2019</a>
                    <a class="dropdown-item" href="https://enable.unc.edu/2018-hidav-participants/">YEAR 2018</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://healthit.unc.edu:8000/hub/login">JUPYTERHUB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lecturer.php">LECTURERS</a>
            </li>
        </ul>
    </nav>
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="image/home_1-min.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="slideshow-caption"> Learn about Health Informatics, Data Analytics and Visualization here.</h3>
                </div>
                </div>
                <div class="carousel-item">
                <img src="image/home_2-min.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="slideshow-caption"> Gain knowledge of principles of biomedical health informatics.</h3>
                </div>
                </div>
                <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="slideshow-caption"> Explore advanced traning and careers in biomedical health informatics field.</h3>
                </div>
                <img src="image/home_3-min.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <p>
            The <a href="https://enable.unc.edu/summer-bootcamp/">Health Informatics, Data Analytics, 
            and Visualization (HiDAV) summer boot camp</a> 
            is a seven week program hosted by <a href="https://enable.unc.edu/about/">ENABLE</a>, 
            an extension of the <a href="https://chip.unc.edu/">Carolina Health Informatics Program (CHIP)</a> at UNC Chapel Hill. 
            The boot camp seeks to expose underrepresented minority undergraduate students to principles of
            biomedical health informatics (BMHI), and encourage them to explore advanced training and careers in this field.
        </p>
        <p>
            Over the courses of the boot camp, students are introduced to a wide range of concepts 
            such as predictive analysis using text mining, analytic model development related to machine 
            learning, and data visualization. To help reinforce engagement and learning of these concepts, 
            our boot camp students are tasked with working together to develop a research project using 
            what they have learned from the program, and applying it to an area of interest in healthcare 
            and/or public health. At the end of boot camp, the students give presentations on their 
            projects and reflect on their experience in gaining critical BMHI skills.
        </p>
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