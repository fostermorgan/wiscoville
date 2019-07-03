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
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arvo&display=swap" >

        <link rel="stylesheet" type="text/css" href="main3.css" />
        <link rel="icon" type="image/ico" href="knmicon.ico" />
        <title>K&M Hot Sauce Co.</title>
    </head>
    <body>
      <?php include 'nav.php'; ?>
      <div class="content container">
        <div class="justanotherhand pt-4 mb-5 text-center">
          Contact Us
        </div>
        <form method="post">
          <div class="form-row">
            <div class="col-md-3 mb-3">
              <label for="validationServer01">First name</label>
              <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
              <div class="valid-feedback">
                Saucy!
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationServer02">Last name</label>
              <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" required>
              <div class="valid-feedback">
                Saucy!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="email">Email</label>
              <input type="text" class="form-control is-valid" id="email" placeholder="Email" required>
              <div class="valid-feedback">
                Saucy!
              </div>
            </div>
            <div class="form-group col-12">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
          </div>
          <button class="btn btn-primary btn-dark mt-3" type="submit">Submit</button>
        </form>


        <!-- <img id="sauce" class="img-fluid float-left d-block mb-5 col-4 p-0 shadow-lg col-12-lg col-4" src="hotsauce.jpg" alt="Beautiful tasty K & M Sauce" style="height: 300px; width: 400px;"> -->
        <div class="col-12 footer pb-3 pt-5">
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-snapchat-ghost"></a>
          <a href="mailto:knm.wiscoville@gmail.com" class="fa fa-mail-reply"></a>
        </div>

      </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
