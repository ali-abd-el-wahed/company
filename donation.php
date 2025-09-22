<?php
require_once 'connection.php'; // Make sure connection.php includes the necessary database connection setup
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:loginClient.php");
} else {
if (isset($_GET['name']) && ($_GET['name'] != "") &&
    isset($_GET['email']) && ($_GET['email'] != "") &&
    isset($_GET['phone']) && ($_GET['phone'] != "") &&
    isset($_GET['amount']) && ($_GET['amount'] != "")&&
    isset($_GET['ccNB']) && ($_GET['ccNB'] != ""))
{
    $name = mysqli_real_escape_string($con, $_GET['name']);
    $email = mysqli_real_escape_string($con, $_GET['email']);
    $phone = mysqli_real_escape_string($con, $_GET['phone']);
    $amount = mysqli_real_escape_string($con, $_GET['amount']);
    $ccNB = mysqli_real_escape_string($con, $_GET['ccNB']);
   
    $query = "INSERT INTO `donars`(`name`, `email`, `phone number`, `amount` , `cardNB` ) VALUES ('$name','$email','$phone','$amount' , '$ccNB')";
    
    $result = mysqli_query($con, $query);
    
    if (!$result)
    {
        die("Error in insert command: " . mysqli_error($con));
    }
    else
    {
        $selected = $_GET['amount'];
        echo $_SESSION['email'].'  HAVE DONATED  ' . $selected . '  FOR US ! THANK YOU <3';
    }
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>BOOKING TICKET</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php">
              <img src="images/logo.png" alt="Logo" width="145px" height="120px">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="matches.php" class="nav-link">Matches</a></li>
                <li><a href="players.php" class="nav-link">Team</a></li>
                <li><a href="shirt1.php" class="nav-link">Shop</a></li>
                <li><a href="registration.php" class="nav-link">Registration</a></li>
                <li><a href="loginClient.php" class="nav-link">LG for FAN </a></li>
                <li><a href="loginAdmin.php" class="nav-link">LG for ADMINS</a></li>
              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="hero overlay" style="background-image: url('images/aaa.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 mx-auto text-center">
            <h1 class="text-white">DONATE AND SERVE OUR CLUB!</h1>
            <p>Be a part of us ! <br> To make our club more top rated !</p>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <form action="donation.php" method="GET">
            <h1 class="text-white">PLEASE ENTER YOUR : </h1> <br> 
            <div class="form-group">
                <p>NAME :</p> 
                <input type="text" class="form-control" placeholder="Name" name="name"required>
              </div>
              <p>EMAIL TO CONTACT YOU :</p>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email"required>
              </div>
              <p>PHONE NUMBER:</p>
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Country code - Your phone number" minlength="9" name="phone" required>
              </div>
               <p>ENTER YOUR CARD INFORMATIONS :</p>    
               <label for="card_number">Card Number     :</label>
               <div class="form-group">
               <input type="text" id="card_number" name="ccNB" placeholder="XXXX-XXXX-XXXX-XXXX" maxlength="16" required>
               </div>
 
                <label for="card_name">Cardholder Name  :</label>
                <div class="form-group">
                <input type="text" id="card_name" name="card_name" placeholder="CARD NAME" required>
                </div>
     
                <label for="expiration">Expiration Date      :</label>
                <div class="form-group">
                <input type="date" id="expiration" name="expiration" placeholder="DD/MM/YY" required>
                </div>
    
                <label for="cvv">CVV :</label>
                <div class="form-group">
                <input type="numbre" id="cvv" name="cvv" placeholder="CVV" maxlength="3" required>
                </div>
                <label for="amount">AMOUNT IN DOLLAR $ :</label>
                <div class="form-group">
                <input type="numbre" id="amount" name="amount" placeholder="AMOUNT IN DOLLAR" maxlenght="40" required>
                </div>
                <br>
   
              <div class="form-group">
                <input type="submit" class="btn btn-primary py-3 px-5" value="DONATE !">
              </div>
            </form>  
          </div>
          <div class="col-lg-4 ml-auto">
            
            <ul class="list-unstyled">
              <li class="mb-2">
                <strong class="text-white d-block">DONATION :</strong><br>
                is serving us and our club <br> we appreciate all of your efforts and we thank you so much for being here with us <3
              </li>
              <br>
              <li class="mb-2">
                <strong class="text-white d-block">ABOUT PHONE NUMBER :</strong><br>
                Please insert the country code before everything :)
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>


<footer>

   

  <div class="row text-center">
    <div class="col-md-12">
      <div class=" pt-5">

      <p>
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script> THE OFFICIAL WEBSITE OF FC AHAL NEUSTAD | ALL RIGHTS ARE reserved .
        </p>
      </div>
    </div>

  </div>
    </footer>



  </div>
  

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>


  <script src="js/main.js"></script>

</body>

</html>