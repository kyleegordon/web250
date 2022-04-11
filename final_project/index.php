<?php
session_start();

if (isset($_SESSION['id'])) {
    $logged_in = true;
} else {
    $logged_in = false;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pawsitively Posh</title>
    <meta name="description" content="Table of Contents" />
    <meta name="author" content="Kylee Gordon" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- font stylesheets -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet" />
    <!-- custom stylesheet -->
    <link href="../styles/default.css" rel="stylesheet" />
    <!-- icons from Font Awesome -->
    <script src="https://kit.fontawesome.com/91d2a50ff4.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="fixed-top">
        <div class="row dflex navbar py-0 h2" id="header_nav">
            <div class="col-6" id="logo">
                <a href="?p=home.php"> <i class="fas fa-paw"></i>Pawsitively Posh </a>
                <p id="tagline" style="color: rgba(194, 240, 242, 0.9); font-size: 0.85rem">
                    <i>Functional fashion for the modern dog</i>
                </p>
            </div>
            <div class="col-1 nav-link ms-auto h1">
                <?php
                global $logged_in;
                if ($logged_in) {
                    echo "<a href=\"?p=logout.php\">Logout</a>";
                } else {
                    echo "<a href=\"?p=login.php\">Login</a>";
                }
                ?>
            </div>
            <div class="col-1 nav-link ms-auto h1">
                <a href="?p=home.php"><i class="fas fa-home"></i></a>
            </div>
        </div>
    </header>
    <div class="container-fluid text-responsive">
        <div id="bg">
            <!-- image credit: Peter Gargiulo, unsplash.com  -->
            <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt="" />
        </div>

        <!-- dynamic content goes here -->

        <?php
        $sPage = $_GET["p"];
        //echo ("You picked the page: " . $sPage); 

        if ($sPage == "") {
            $sPage = "home.php";
        }
        include("contents/" . $sPage);
        ?>
    </div>
    <!-- Optional JavaScript for Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <div class="footer fixed-bottom">
        <div class="row text-center navbar">
            <div class="col-sm-12 h5">
                <p>
                    <a href="https://github.com/kyleegordon">GitHub</a> &#9653;
                    <a href="https://kyleegordon.github.io/web250/index.html">
                        GitHub WEB250
                    </a>
                    &#9653; <a href="https://kyleegordon.github.io/">GitHub IO</a> &#9653;
                    <a href="https://www.freecodecamp.org/kyleegordon">FreeCodeCamp</a>
                    &#9653;
                    <a href="https://www.codecademy.com/profiles/kyleegordon">Codecademy</a>
                    &#9653;
                    <a href="https://jsfiddle.net/user/kyleegordon/fiddles/">JSFiddle</a>
                    &#9653;
                    <a href="https://www.linkedin.com/in/kylee-gordon-060612181/">LinkedIn</a>
                </p>
                <p>Page built by Gordon Designs</p>
                <a href="https://validator.w3.org/check?uri=" id="validate_html">Validate HTML</a>
                &#9653;
                <a href="https://jigsaw.w3.org/css-validator/check/referer?uri=" id="validate_css">Validate CSS</a>

                <script>
                document
                    .getElementById("validate_html")
                    .setAttribute(
                        "href",
                        "https://validator.w3.org/check?uri=" + location.href
                    );
                document
                    .getElementById("validate_css")
                    .setAttribute(
                        "href",
                        "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href
                    );
                </script>
            </div>
        </div>
    </div>

</body>

</html>