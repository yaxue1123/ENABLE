<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="Shortcut Icon" href="image/logo.png">
    <title>ENABLE Online Learning</title>
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
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="image/home_1-min.jpg" width="100%">
                <div class="slideshow-caption-container">
                    <p class="slideshow-caption"> 
                        Learn about Health Informatics, Data Analytics and Visualization here.
                    </p>
                    <p>
                        <a class="btn btn-primary" href="https://enable.unc.edu/apply-to-summer-bootcamp/">
                            Apply to Boot Camp</a>
                    </p>
                </div>
            </div>
            <div class="mySlides fade">
                <img src="image/home_2-min.jpg" width="100%">
                <div class="slideshow-caption-container">
                    <p class="slideshow-caption"> 
                        Gain knowledge of principles of biomedical health informatics.
                    </p>
                    <p>
                        <a class="btn btn-primary" href="https://enable.unc.edu/apply-to-summer-bootcamp/">
                            Apply to Boot Camp</a>
                    </p>
                </div>
            </div>
            <div class="mySlides fade">
                <img src="image/home_3-min.jpg" width="100%">
                <div class="slideshow-caption-container">
                    <p class="slideshow-caption"> 
                        Explore advanced traning and careers in biomedical health informatics field.
                    </p>
                    <p>
                        <a class="btn btn-primary" href="https://enable.unc.edu/apply-to-summer-bootcamp/">
                            Apply to Boot Camp</a>
                    </p>
                </div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
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
        </div>
    </footer>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        }

        // drop-down menu
        document.querySelectorAll(".dropbtn").forEach(function(el){
        el.addEventListener("click",function(e){
            var el = e.currentTarget.nextElementSibling;

            if (el.classList.contains("dropdown-content-show")){
                el.classList.remove("dropdown-content-show");
                el.classList.add("dropdown-content");
            } else{
                el.classList.remove("dropdown-content");
                el.classList.add("dropdown-content-show");
            }
        });
        });
    </script>
</body>
</html>