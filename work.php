<?php
include_once (__DIR__.'./includes/header.php')
?>
    <title>Work</title>
</head>
<body>
<!--Header-->
<nav class="navbar bg-dark navbar-dark" id="navbar">
    <div>
        <h1><a class="navbar-brand amar" href="index.php" style="">AMAR SYLL</a></h1>
    </div>
    <div class="collapse navbar-collapse d-flex justify-content-end mr-3 " id="navbarNav">
        <h3 class=""><a class="nav-link" href="index.php">Home</a></h3>
        <h3 class="menu"><a class="nav-link" href="work.php">Work</a></h3>
        <h3 class=""><a class="nav-link" href="about.php">About</a></h3>
        <h3 class=""><a class="nav-link" href="contact.php">Contact</a></h3>
    </div>
</nav>
<!--end Header-->
<!--Body-->
<div class="container  my-5">
    <div class="row my-5">
        <div class="col-12">
            <h3 class="text-center">MY WORK</h3>
        </div>
    </div>
    <div class="row my-5 centered">
        <div class="col-lg-4 text-center">
            <a  href="components/javascript.php"><img class="img-responsive img img-thumbnail" src="assets/img/javascript/weather-1.png" alt="" /></a>
            <h3><a href="components/javascript.php" style="color: black" >JavaScript</a></h3>
        </div>
        <div class="col-lg-4 text-center">
            <a  href="components/reactjs.php"><img class="img-responsive img img-thumbnail" src="assets/img/reactjs/react-1.jpg" alt="" /></a>
            <h3><a href="components/reactjs.php" style="color: black" >ReactJs</a></h3>
        </div>
        <div class="col-lg-4 text-center">
            <a  href="components/phpmysql.php"><img class="img-responsive img img-thumbnail" src="assets/img/php_mysql/php1.png" alt="" /></a>
            <h3><a href="components/phpmysql.php" style="color: black">PHP/MySQL</a></h3>
        </div>
    </div><!-- /row -->
    <div class="row mt centered">
        <div class="col-lg-4 text-center">
            <a  href="components/nodejs.php"><img class="img-responsive img img-thumbnail" src="assets/img/nodejs/nodejs-1.png" alt="" /></a>
            <h3>
                <a href="components/nodejs.php" style="color:#000;">NodeJs</a>
            </h3>
        </div>
        <div class="col-lg-4 text-center">
            <a  href="components/wordpress.php"><img class="img-responsive img img-thumbnail" src="assets/img/wordpress/wordpress.png" alt="" /></a>
           <h3>
               <a href="components/wordpress.php" style="color: black">Wordpress</a>
           </h3>
        </div>
        <div class="col-lg-4 text-center">
            <a  href="components/react-2.php"><img class="img-responsive img img-thumbnail" src="assets/img/reactjs/react01.png" alt="" /></a>
            <h3><a href="components/react-2.php" style="color: black" >ReactJs</a></h3>
        </div>
    </div><!-- /row -->
</div><!-- /container -->
<!--end Body-->
<!--Footer-->
<?php

include_once (__DIR__.'./includes/footer.php')


?>
<!--end Footer-->
