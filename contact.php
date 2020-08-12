<?php
    $page = 'contact';


      include_once "db_connection.php";
      $message = "";
      $email = "";
      $database = new Connection();
      $conn = $database->openConnection();
      if(isset($_POST['newsletterSubmit'])){
        if(verifyNewsLetterEmail()){
          $email = $_POST['newsletteremail'];
          $_POST = array();
          addUser();
          header('Location: shop.php');
          $message = "Thank you for joining us on this journey!";
        }
      }

      function verifyNewsLetterEmail(){
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
    $message_type = "";

    function verifyName(){
      if($_POST['name'] != ''){
        return true;
      }
      return false;
    }
    function verifyEmail(){
      if($_POST['email'] != ''){
        return true;
      }
      return false;
    }
    function verifyMessage(){
      if($_POST['message'] != ''){
        return true;
      }
      return false;
    }

    function validateForm(){
      if(!verifyName()){
        $message = "Please enter your name";
        $message_type = "invalid";
        return false;
      }else if(!verifyEmail()){
        $message = "Please enter your email";
        $message_type = "invalid";
        return false;
      }else if(!verifyMessage()){
        $message = "Please enter a message";
        $message_type = "invalid";
        return false;
      }else{
        $message_type = "valid";
        return true;
      }
    }
    function sendRequest(){
      // email knm.wiscoville@gmail.
      $name = $_POST['name'];
      $messagefromweb = $_POST['message'];

      $email = $_POST["email"];
      $to = "knm.wiscoville@gmail.com";
      $subject = "New Contact Submission";
      $headers = "From: $email\n";
      $message = "You have received a new message from $name.\n" . "Here is the message:\n\n$messagefromweb";

      return mail($to,$subject,$message,$headers);


    }

    if(isset($_POST['sendEmail'])){
      if(validateForm() && sendRequest()){
        // sendRequest();
        $message = "Thanks for reaching out to us!";
        $message_type = "success";
      }else {
        $message_type = "invalid";
        $message = "There was an error on our end :( Please email us at knm.wiscoville@gmail.com to contact us.";
      }
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

      <title>K & M | Contact</title>
    </head>
    <body id="page-top">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">

        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="index.php#page-top">K & M Hot Sauce</a>
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
      <div class="header2 mb-5 sticky-top">
        Contact Us
      </div>

      <div class="container pb-5 mt-5 ">
        <div class="name pb-4 text-center" style="font-size: 1.5em; ">
          Leave your message, review, or inquiry here and we'll get back to you as soon as possible.
        </div>
        <?php if($message !== "" && $message_type === "success"){ ?>
          <div class="alert alert-success">
            <?php echo $message; ?>
          </div>
        <?php } else { ?>
          <div class="alert alert-danger">
            <?php echo $message; ?>
          </div>
        <?php } ?>
        <form method="post">
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="name">Name <span class="red">*</span></label>
              <input type="text" class="form-control is-<?php echo $message_type; ?>" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="email">Email <span class="red">*</span></label>
              <input type="text" class="form-control is-<?php echo $message_type; ?>" id="email" name="email" placeholder="Email" required>

            </div>
            <div class="form-group col-12">
              <label for="message">Message <span class="red">*</span></label>
              <textarea class="form-control is-<?php echo $message_type; ?>" id="message" name="message" rows="3" required></textarea>

            </div>
          </div>
          <button class="btn btn-primary btn-dark mt-3" type="submit" name="sendEmail">Send</button>
        </form>

      </div>
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
                <p>K & M Hot Sauce is almost ready to go live. If you're interested, then sign up below to be the first to know when we are.</p>
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
          <div class="footer-copyright pt-2">© 2019 Copyright: K & M Hot Sauce LLC | Designed by:
            <a href="https://www.linkedin.com/in/foster-morgan/" target="_blank"> Foster Morgan</a>
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
