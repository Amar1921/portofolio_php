<?php
if (isset($_GET)){
    $mess=$_GET['message'];
    $error=$_GET['error'];
}
include_once (__DIR__.'./includes/header.php')
?>

    <title>Contact</title>
</head>
<body>
<!--Header-->
<nav class="navbar bg-dark navbar-dark mb-4" id="navbar">
    <div>
        <h1><a class="navbar-brand amar" href="index.php" style="">AMAR SYLL</a></h1>
    </div>
    <div class="collapse navbar-collapse d-flex justify-content-end mr-3" id="navbarNav">
        <h3 class=""><a class="nav-link" href="index.php">Home</a></h3>
        <h3 class=""><a class="nav-link" href="work.php">Work</a></h3>
        <h3 class=""><a class="nav-link" href="about.php">About</a></h3>
        <h3 class="menu"><a class="nav-link" href="">Contact</a></h3>
    </div>
</nav>
<!--end Header-->
<!--Body-->

<div class="container-contact100 mb-3">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Contact Me
				</span>

            <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                <input class="input100" name="name" placeholder="Full Name" type="text">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter your email: e@a.x">
                <input class="input100" name="email" placeholder="E-mail" type="text">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter your phone">
                <input class="input100" name="phone" placeholder="Phone" type="text">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter your message">
                <textarea class="input100" name="message" placeholder="Your Message"></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn mt-2">
                <button class="contact100-form-btn">
                            <span>
                                <i aria-hidden="true" class="fa fa-paper-plane-o m-r-6"></i>
                                Send
                            </span>
                </button>
            </div>
        </form>
    </div>
</div>
<!--end Body-->
<!--Footer-->
<?php
     include_once (__DIR__.'./includes/footer.php')
?>
<!--end Footer-->


