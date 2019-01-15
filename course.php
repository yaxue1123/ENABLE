<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="Shortcut Icon" href="image/logo.png">
    <title>ENABLE Course</title>
    <link href="stylesheet/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
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
        </ul>
    </nav>
    <section>
        <h1 class="topic-head">Topic: Text Mining</h1>
        <h2>Lecture 1 - Introduction to Text Mining</h2>
        <h3>Overview</h3>
        <p>
            This lecture will answer questions including what is text mining, applications of text mining, 
            and the big picture of predictive as well as exploratory analysis of text. Also, this lecture includes 
            a sample application of topic categorization and visualization and a hands-on practce to trigger
            better and deeper understanding.
        </p>
        <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/I3cjbB38Z4A"></iframe>
        </div>
        <h3>Review questions</h3>
        <span class="course-question"><i class="fas fa-plus"></i> What is token and wokenization?</span>
        <div class="course-answer">
            Token is a unit of text analysis, usually a word or other atomic parse element.
            And tokenization is the process of splitting text into terms of tokens.
        </div>
        <h3>Materials</h3>
        <table>
            <tr>
                <td>Slide</td>
                <td>Transcript</td>
                <td>Video</td>
            </tr>
            <tr>
                <td>
                    <a href="materials/text-mining/slides/1.TextMining.Introduction.pdf" download>pdf</a>
                </td>
                <td>
                    <a href="#" download="">txt</a>
                </td>
                <td>
                    <a href="#" download>mp4</a>
                </td>
            </tr>
        </table>
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
            $(".course-question").click(() =>{
                $(".course-answer").toggle(100, () => {
                    if ($(".course-question i").attr("class") === "fas fa-plus") {
                        $(".course-question i").attr("class", "fas fa-minus");
                    } else {
                        $(".course-question i").attr("class", "fas fa-plus");
                    }
                })
            })
        })
    </script>
</body>
</html>