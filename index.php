<?php
  $page = 'home';

  include_once "db_connection.php";
  $message = "";
  $email = "";
  $database = new Connection();
  $conn = $database->openConnection();
  if(isset($_POST['newsletterSubmit'])){
    if(verifyEmail()){
      $email = $_POST['newsletteremail'];
      $_POST = array();
      addUser();
      header('Location: shop.php');
      $message = "Thank you for joining us on this journey!";
    }
  }

  function verifyEmail(){
    if($_POST["newsletteremail"] != ''){
      return true;
    }
    return false;
  }

  function addUser(){
    global $conn;
    global $email;
    $statement = $conn->prepare("INSERT INTO newsletter (email) VALUES (:email);");
    $statement->bindValue(":email",$email);
    $insert_success = $statement->execute();
  }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Foster Morgan">

  <title>K & M Hot Sauce Co.</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Just+Another+Hand" />
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Homemade+Apple" />
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arvo&display=swap" >
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Caveat&display=swap" >
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">


  <!-- Icon -->
  <link rel='shortcut icon' href='./img/favicon.ico' type='image/x-icon'>
  <link rel='icon' href='./img/favicon.ico' type='image/x-icon'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">

    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="#page-top">K & M Hot Sauce Co.</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              About
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item js-scroll-trigger" href="#thesauce">The Sauce</a>
              <a class="dropdown-item js-scroll-trigger" href="#thecreators">The Creators</a>
              <a class="dropdown-item js-scroll-trigger" href="#news_reviews">News/Reviews</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="shop.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <?php if($message !== ""){ ?>
        <div class="alert alert-success">
          <?php echo $message; ?>
        </div>
      <?php } ?>
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-sm-10 align-self-end">
          <h1 class="text-uppercase text-white title">Handmade in Eau Claire, Wisconsin</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white font-weight-light mb-5 info" style="font-size: 2.5em;">The sauce that doesn't disappoint</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger mr-4" href="#thesauce">Learn More</a>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="shop.php">Shop</a>

        </div>
      </div>
    </div>
  </header>

  <!-- The Sauce Section -->
  <div class="header" id="thesauce">
    The Sauce
  </div>
  <section class="page-section p-5" >
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 order-lg-1">
          <div class="mb-5 mt-5">
            <h5 class=" info mb-4 text-center" style="font-size: 3em;">"When it comes to our hot sauce, the goal is simple: to provide a uniquely curated culinary experience, backed by only the best natural and locally-sourced ingredients. This isn’t your standard hot sauce. </br><strong>This is K&M’s.</strong>"</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section p-5 bg-primary" >
    <div class="container">
      <div class="row align-items-center pb-5 ">
        <div class="col-lg-3 order-lg-2 ">
          <div class="pt-5 pl-5 ml-5">
            <img id="shake" class="img-fluid text-center w-50 d-none d-lg-block" src="./img/singlebottle.png" alt="Picture of the best sauce in the world. It's a real shame you can't see it. :(">
          </div>
        </div>
        <div class="col-lg-8 order-lg-1">
          <div>
            <h2 class="display-4 name">Our Sauce, Our Story</h2>
            <p class="description">In rural Wisconsin, two college guys were fed up with the lack of local hot sauce variety, which left them with one choice; to make their own. After unprecedented popularity among family, friends, and peers, they knew they were on to something truly sensational.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- The Creators Section -->
  <div class="header" id="thecreators">
    The Creators
  </div>
  <section class="white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle shadow-lg" src="./img/sam2.jpg " alt="Picture of Sam Kuehn">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="pt-5 pl-5 pr-5">
            <h2 class="display-4 name">Sam Kuehn</h2>
            <p class="description">Sam’s appreciation for good food and home cooking began at a young age, when he was taught how to cook by his parents. After spending four years working in the restaurant business, his experience and passion grew. Being a self acclaimed “chilihead”, hot sauce aficionado, and culinary enthusiast, Sam enjoys sharing his love for cooking and food with others. He currently attends the University of Wisconsin-Eau Claire, studying English and Communications, while still furthering his interest in gourmet cooking and new culinary creations.</p>
          </div>
          <div class="pr-5 pl-5 pb-5">
            <img class="img-fluid" src="./img/samSignaturealpha.png" alt="Sam Kuehn's Signature">
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="bg-primary">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle shadow-lg" src="./img/foster2.jpg" alt="Picture of Foster Morgan">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="pt-5 pl-5 pr-5">
            <h2 class="display-4 name">Foster Morgan</h2>
            <p class="description">Foster was first taught the master of cooking cookies in middle school. Soon after, an epiphany occured to him. He realized he can create his own cookies anytime he wanted (not to mention he didn't have to leave the house). Fast forwarding a couple of years, Foster attends University of Wisconsin-Eau Claire with Sam, majoring in Computer Science. He even made this website you're looking at right now. It wasn't until recently that Sam inspired Foster to pick up his long lost passion for cooking, except this time the 'cookie dough' is a little more spicy.</p>
          </div>
          <div class="pr-5 pl-5 pb-5">
            <img class="img-fluid w-75" src="./img/fosterSignaturealpha.png" alt="Foster Morgan's Signature">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Contact Section -->
  <div class="header" id="news_reviews">
    News/Reviews
  </div>
  <section class="pt-5 pb-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Still not convinced?</h2>
          <p class="text-muted mb-3">See what John has to say.</p>

          <hr class="divider my-4">
          <video class="w-100" controls>
            <source src="./img/promovid.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5 mx-auto mr-auto">
    <div class="container">
      <div class=" row">
        <!-- Social buttons -->
        <div class="col-12 col-lg-6 ">
          <!-- <br class="d-none d-lg-block"> -->
          <div class="newsletterheader text-center">
             <p>Contact</p>
          </div>
          <hr class="divider my-0 pb-3">

          <!-- <br class="d-none d-lg-block"> -->
          <ul class="list-unstyled list-inline text-center pb-3">
            <li class="list-inline-item">
              <a href="https://www.facebook.com/KM-Sauce-Co-106929733982252/" target="_blank" class="fa fa-facebook mr-3"></a>
              <a href="https://www.instagram.com/knmsauceco/" target="_blank" class="fa fa-instagram mr-3"></a>
              <a href="mailto:knm.wiscoville@gmail.com" class="fa fa-envelope-o"></a>
            </li>
          </ul>
          <!-- <hr class="d-block d-lg-none divider my-0 pb-3"> -->
          <hr class="d-block d-lg-none clearfix w-75" />

        </div>
        <!-- newsletter -->
      <div class="newsletter col-12 col-lg-6 text-center ml-0 row">
        <form id="newsletterform" action="#" class="mt-0 mb-2" method="post" name="newsletter">
          <div class="newsletterheader text-center">
             <p>Newsletter</p>
          </div>
          <hr class="divider my-0 pb-4">

          <div class="newsletterdescription">
            <p>K&M Sauce Co. is almost ready to go live. If you're interested, then sign up below to be the first to know when we are.</p>
          </div>
          <div class="input">
            <input type="text" class="button" id="newsletteremail" name="newsletteremail" placeholder="NAME@EXAMPLE.COM" required>
            <input type="submit" class="button" id="newsletterSubmit" name="newsletterSubmit" value="SIGN UP">
          </div>
        </form>
      </div>

      <!-- <div class="newsletter col-12 d-lg-none border border-dark text-center row">
        <form id="newsletterform" action="#" class="mt-0 mb-2" method="post" name="newsletter">
          <div class="newsletterheader">
             <p>Newsletter</p>
          </div>
          <hr class="divider my-0 pb-4">

          <div class="newsletterdescription">
            <p>K&M Sauce Co. is almost ready to go live. If you're interested, then sign up below to be the first to know when we are.</p>
          </div>
          <div class="input">
            <input type="text" class="button" id="newsletteremail" name="newsletteremail" placeholder="NAME@EXAMPLE.COM" required>
            <input type="submit" class="button" id="newsletterSubmit" name="newsletterSubmit" value="SIGN UP">
          </div>
        </form>
      </div> -->



    </div>
    <!-- Copyright -->
    <div class="text-center">
      <hr class="clearfix w-75" />
      <div class="footer-copyright pt-2">© 2019 Copyright: K&M Sauce Co. | Designed by:
        <a href="http://www.thefostermorgan.com" target="_blank"> Foster Morgan</a>
      </div>
    </div>
  </div>

  </footer>
  <!-- For scroll to top button -->

  <!-- FOR SCROLL UP BUTTON -->

  <a class="fa fa-arrow-up js-scroll-trigger" href="#page-top" id="myBtn" title="Go to top"></a>

  <script>
  // When the user scrolls down 130px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 130 || document.documentElement.scrollTop > 130) {
      document.getElementById("myBtn").style.display = "block";
    } else {
      document.getElementById("myBtn").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>
