<?php
  $page = 'shop';

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
<html>
    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Foster Morgan">

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

      <title>K&M | Shop</title>
  </head>
  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">

      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php#page-top">K & M Hot Sauce Co.</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto my-2 my-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item js-scroll-trigger" href="index.php#thesauce">The Sauce</a>
                <a class="dropdown-item js-scroll-trigger" href="index.php#thecreators">The Creators</a>
                <a class="dropdown-item js-scroll-trigger" href="index.php#news_reviews">News/Reviews</a>
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
    <div class="header2 sticky-top">
      The Shop
    </div>
    <?php if($message !== ""){ ?>

        <div class="container pt-5">
            <div class="alert alert-success">
              <?php echo $message; ?>
            </div>
        </div>
      <?php } ?>

      <!-- Sauce Portfolio Section -->
      <section id="portfolio">
        <div class="title text-center">
          Sauces
        </div>
        <hr class="divider my-0 pb-5">

        <div class="container-fluid p-0">
          <div class="row no-gutters">
            <div class="col-lg-4 col-sm-6 pb-3">
              <li class="portfolio-box" href="img/singlebottle.png">
                <img class="img-fluid rounded mx-auto d-block w-25 pt-2" src="img/singlebottle.png" alt="">
                <div class="portfolio-box-caption">
                  <div class="project-category text-white-50">
                    Coming Soon...
                  </div>
                  <div class="project-name">
                    Honeybee's Sting
                    <!-- TODO: add button to sign up for email when available -->
                    <!-- <button id="myBtn" class="" href="contact.php" data-title="EMAIL WHEN AVAILABLE"></button> -->
                    <br /><br />🔥
                  </div>
                  <div class="sauce-details">
                     <br />
                    Honeybee's Sting has the sweetness of honey and the sting of a serrano pepper. Good enough to satisfy all 9000 tastebuds.
                  </div>
                </div>
                <div class="sauce-title">
                  Honeybee's Sting
                </div>
                <div class="sauce-price pb-3">
                  $7.99
                </div>
              </li>

            </div>
            <div class="col-lg-4 col-sm-6">
              <li class="portfolio-box" href="img/mysterybottle.png">
                <img class="img-fluid rounded mx-auto d-block w-25 pt-2" src="img/mysterybottle.png" alt="">
                <div class="portfolio-box-caption">
                  <div class="project-category text-white-50">
                    Coming Soon...
                  </div>
                  <div class="project-name">
                    Essence of Flame
                    <br /><br />🔥🔥
                  </div>
                  <div class="sauce-details">
                     <br />
                    What's necessary for every fire? A flame. And we harnessed into this 5oz bottle.
                  </div>
                </div>
                <div class="sauce-title">
                  Essence of Flame
                </div>
                <div class="sauce-price pb-3">
                  $7.99
                </div>
              </li>

            </div>
            <div class="col-lg-4 col-sm-6">
              <li class="portfolio-box" href="img/mysterybottle.png">
                <img class="img-fluid rounded mx-auto d-block w-25 pt-2" src="img/mysterybottle.png" alt="">
                <div class="portfolio-box-caption">
                  <div class="project-category text-white-50">
                    Coming Soon...
                  </div>
                  <div class="project-name">
                    Heatonist’s Hellscape
                    <br /><br />🔥🔥🔥🔥🔥
                  </div>
                  <div class="sauce-details">
                     <br />
                    Kyle: "Yo, watch me try Heatonist’s Hellscape..." Narrator: Kyle was never seen again.
                  </div>
                </div>
                <div id="link" class="sauce-title" >
                  Heatonist’s Hellscape
                </div>
                <div id="link" class="sauce-price pb-3" style="text-decoration: none;">
                  $7.99
                </div>
              </li>

            </div>
            <div class="col-lg-4 col-sm-6">
              <li class="portfolio-box" href="img/mysterybottle.png">
                <img class="img-fluid rounded mx-auto d-block w-25 pt-2" src="img/mysterybottle.png" alt="">
                <div class="portfolio-box-caption">
                  <div class="project-category text-white-50">
                    Coming Soon...
                  </div>
                  <div class="project-name">
                    Tongue Tied
                    <br /><br />🔥🔥🔥
                  </div>
                  <div class="sauce-details">
                     <br />
                    You know that cat that has everyone's tongue? Well, we met him and he gave us his secret.
                  </div>
                </div>
                <div class="sauce-title">
                  Tongue Tied
                </div>
                <div class="sauce-price pb-3">
                  $7.99
                </div>
              </li>

            </div>
            <div class="col-lg-4 col-sm-6">
              <li class="portfolio-box" href="img/mysterybottle.png">
                <img class="img-fluid rounded mx-auto d-block w-25 pt-2" src="img/mysterybottle.png" alt="">
                <div class="portfolio-box-caption">
                  <div class="project-category text-white-50">
                    Coming Soon...
                  </div>
                  <div class="project-name">
                    High Octane
                    <br /><br />🔥🔥
                  </div>
                  <div class="sauce-details">
                     <br />
                    High Octane gives you the speed and adrenaline to go faster, faster, faster.
                  </div>
                </div>
                <div class="sauce-title">
                  High Octane
                </div>
                <div class="sauce-price pb-3">
                  $7.99
                </div>
              </li>

            </div>
            <div class="col-lg-4 col-sm-6">
              <li class="portfolio-box" href="img/mysterybottle.png">
                <img class="img-fluid rounded mx-auto d-block w-25 pt-2" src="img/mysterybottle.png" alt="">
                <div class="portfolio-box-caption">
                  <div class="project-category text-white-50">
                    Coming Soon...
                  </div>
                  <div class="project-name">
                    Rocket Fuel
                    <br /><br />🔥🔥🔥
                  </div>
                  <div class="sauce-details">
                     <br />
                    Rocket Fuel is still in the making, but I assure you it would fuel even Elon's rockets.
                  </div>
                </div>
                <div class="sauce-title">
                  Rocket Fuel
                </div>
                <div class="sauce-price pb-3">
                  $7.99
                </div>
              </li>

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
          <div class="newsletter col-12 col-lg-6 text-center">
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
          </div>
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
