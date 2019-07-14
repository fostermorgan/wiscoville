<?php
    $page = 'contact';

    $message = "";
    $message_type = "";

    function verifyFirstName(){
      if($_POST['firstname'] != ''){
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
      if(!verifyFirstName()){
        $message = "Please enter your first name";
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
      $lastname = "";
      if(isset($_POST['lastname'])){
        $lastname = " " . $_POST['lastname'];
      }
      $name = $_POST['firstname'] . $lastname;
      
      $email = $_POST["email"];
      $to = "knm.wiscoville@gmail.com";
      $subject = "New Contact Submission";
      $headers = "From: $email\n";
      $message = "You have received a new message from $name.\n" . "Here is the message:\n $message";

      // $user = "$email";
      // $usersubject = "Thank You";
      // $userheaders = "From: you@youremailaddress.com\n";
      // $usermessage = "Thank you for subscribing to our mailing list.";
      mail($to,$subject,$message,$headers);
      // mail($user,$usersubject,$usermessage,$userheaders);


    }

    if(isset($_POST['sendEmail'])){
      if(validateForm()){
        sendRequest();
        $message = "Thanks for reaching out to us!";
        $message_type = "success";
      }else {
        $message_type = "invalid";
      }
    }
?>
<!DOCTYPE html>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Just+Another+Hand" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Homemade+Apple" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arvo&display=swap" >

        <link rel="stylesheet" type="text/css" href="main.css" />
        <link rel="icon" type="image/ico" href="knmicon.ico" />
        <title>K&M Hot Sauce Co.</title>
    </head>
    <body>
      <?php include 'nav.php'; ?>
      <div class="content container">

        <div class="header mb-5 text-center">
          Contact Us
        </div>
        <?php if($message !== ""){ ?>
          <div class="alert alert-success">
            <?php echo $message; ?>
          </div>
        <?php } ?>
        <form method="post">
          <div class="form-row">
            <div class="col-md-3 mb-3">
              <label for="firstname">First name*</label>
              <input type="text" class="form-control is-<?php echo $message_type; ?>" id="firstname" name="firstname" placeholder="First name" required>

            </div>
            <div class="col-md-3 mb-3">
              <label for="lastname">Last name</label>
              <input type="text" class="form-control" id="lastname" name"lastname" placeholder="Last name">
            </div>
            <div class="col-md-6 mb-3">
              <label for="email">Email*</label>
              <input type="text" class="form-control is-<?php echo $message_type; ?>" id="email" name="email" placeholder="Email" required>

            </div>
            <div class="form-group col-12">
              <label for="message">Message*</label>
              <textarea class="form-control is-<?php echo $message_type; ?>" id="message" name="message" rows="3" required></textarea>

            </div>
          </div>
          <button class="btn btn-primary btn-dark mt-3" type="submit" name="sendEmail">Send</button>
        </form>
        <?php include 'footer.php'; ?>

      </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
