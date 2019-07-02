<?php
    $state = 'new';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Just+Another+Hand" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Homemade+Apple" />
        <link rel="stylesheet" type="text/css" href="main.css">
        <style >
          .handwritten{
            font-family: "Just Another Hand";
            font-size: 90px;
            font-weight: 0;
            line-height: 100px;
            color: black;
            text-shadow: 7px 7px 0px rgba(0,0,0,0.1);
          }
          .logo{
            font-family: serif;
            font-style: italic;
            font-size: 2em;
          }
          .navbar{
            background-color: black;

          }
          .ivory{
            color: ivory;
          }
          .bg-image {
              position: relative;
          }
          .bg-image img {
              display: block;
              width: 100%;
              background-size: cover;
              margin: 0 auto;
              filter: blur(5px);
              -webkit-filter: blur(5px);
              /* max-height: 100%; */
          }
          .bg-image h1 {
              position: absolute;
              text-align: center;
              top: 15%;
              bottom: 0;
              left: 0;
              right: 0;
          }
          .footer {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            /* background-color: ivory; */
            text-align: center;
          }
          .nav, .main {
              background-color: #f6f6f6;
              text-align: center;
          }
          body{
            background-color: black;
          }

          /*    social media buttons */
          .fa {
              padding: 20px;
              font-size: 30px;
              width: 70px;
              text-align: center;
              text-decoration: none;
              margin: 5px 2px;
              border-radius: 50%;
          }

          .fa:hover {
              opacity: 0.4;
              text-decoration: none;
              color: ivory;
          }

          .fa-facebook {
              background: #3B5998;
              color: white;
          }

          .fa-twitter {
              background: #55ACEE;
              color: white;
          }
          .fa-mail-reply {
              background: #ff3f3a;
              color: white;
          }
          .fa-instagram {
              background: #df00db;
              color: white;
          }
          .fa-snapchat-ghost {
              background: #fffc00;
              color: white;
              text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
          }
          /* .container-fluid{
            padding-left: 250px;
          } */


        </style>

        <title>K&M Hot Sauce Co.</title>
    </head>
    <body>


        <div class="container-fluid pr-0 pl-0">
                  <?php include 'nav.php'; ?>


                  <div class="bg-image col-12 pr-0 pl-0">
                      <img src="fulldrawn.jpg">
                      <h1 class="handwritten">Hand made in Eau Claire, Wisconsin</h1>
                      <div class="footer pb-3 pt-5">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-snapchat-ghost"></a>
                        <a href="mailto:wiscoville@gmail.com" class="fa fa-mail-reply"></a>
                      </div>
                  </div>
        </div>




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
