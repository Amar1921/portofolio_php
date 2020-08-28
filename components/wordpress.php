<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/style/main.css" rel="stylesheet">
    <title>Wordpress</title>
</head><body>
<!--Header-->
<nav class="navbar bg-dark navbar-dark" id="navbar">
    <div>
        <h1><a class="navbar-brand amar" href="../index.php" style="">AMAR SYLL</a></h1>
    </div>
    <div class="collapse navbar-collapse d-flex justify-content-end mr-3" id="navbarNav">
        <h3 class=""><a class="nav-link" href="../index.php">Home</a></h3>
        <h3><a class="nav-link" href="../work.php">Work</a></h3>
        <h3><a class="nav-link" href="../about.php">About</a></h3>
        <h3><a class="nav-link" href="../contact.php">Contact</a></h3>
    </div>
</nav>
<!--end Header-->
<!--Body-->
<div class="container">
    <div class="row d-flex justify-content-center py-4">
        <div class="col-8 ">
            <h4 class="text-black-50">Description project</h4>
            <article class="description">
                Questo è il mio progetto wordpress, mi è stato chiesto di realizzare un sito per promuovere un'attività commerciale locale.
                Mi sono ispirato a mia sorella per realizzare un sito di e-commerce.
                Sono partito da un tema vuoto personalizzato da me stesso utilizzando l'estensione elementor.
                Ecco il link <a href="https://codeload.github.com/Amar1921/amar-syll-wordpress-1/zip/master?token=ANY7SASULKTTLWCTWRN5XR27HBMU6"
                               target="_blank" class="text-success-50" style="color: blue ;font-size: larger">Github</a> del progetto.
            </article>
        </div>
    </div>
    <div class="row m-3 d-flex justify-content-center">
        <!--Caroussel-->
        <div class="col-sm-10">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img alt="img1" class="d-block w-100 img-fluid" src="../assets/img/wordpress/wordpress-2.png">
                    </div>
                    <div class="carousel-item">
                        <img alt="img2" class="d-block w-100 img-fluid" src="../assets/img/wordpress/wordpress-5.png">
                    </div>
                    <div class="carousel-item">
                        <img alt="img3" class="d-block w-100 img-fluid" src="../assets/img/wordpress/wordpress-3.png">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span aria-hidden="true" class="carousel-control-prev-icon bg-dark"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span aria-hidden="true" class="carousel-control-next-icon bg-dark"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-12 d-flex justify-content-center my-3 p-2">
            <a href="../work.php"><button class="btn btn-outline-dark">Back to Work</button></a>
        </div>
    </div>
</div>
<!--end Body-->
<!--Footer-->
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h4>My Bunker</h4>
                <p>
                    Desio via per Cesano Maderno,29<br/>
                    +39 3884035746, <br/>
                    Monza, Lombardia. <br/>
                    Copyright&copy; <span id="date"></span>
                </p>
            </div><!-- /col-lg-4 -->

            <div class="col-lg-4">
                <h4>My Links</h4>
                <ul class="social">
                    <li><a style="color: white" href="https://www.facebook.com/Amar.syll/" target="_blank"><i
                            class="icon-facebook fa fa-facebook icon-social"></i>Facebook</a></li>
                    <li><a style="color: white" href="https://github.com/Amar1921" target="_blank"><i
                            class="icon-github fa fa-github icon-social"></i>Github</a>
                    </li>
                    <li><a style="color: white" href="https://www.linkedin.com/in/amar-syll-20b595198/" target="_blank"><i
                            class="icon-linkedin fa fa-linkedin icon-social"></i>Linkedin</a></li>
                </ul>
            </div><!-- /col-lg-4 -->
            <div class="col-lg-4">
                <h4>Note</h4>
                <p>Questo porofolio è stato realizzato con HTML/CSS anche con un po' di PHP e di JavScript. C'è anche una parte di bootstrap come base per il CSS. .</p>
            </div><!-- /col-lg-4 -->
        </div>

    </div>
</div>
<!--end Footer-->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="../script/index.js"></script>

</body>
</html>
