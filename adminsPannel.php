<?php
require_once 'connection.php'; // Make sure connection.php includes the necessary database connection setup
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:loginAdmin.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>ADMIN PANNEL</title>
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
              <a href='logout2.php' style="color:white">logout</a>
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

    <div class="hero overlay" style="background-image: url('images/bg_8.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 mx-auto text-center">
            <h1 class="text-white">HERE IS THE ADMIN PANNEL !</h1>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
            <h3>Admin :</h3>
            <p><a href="viewadmin.php">View admin</a></p>
            <p><a href="addadmin.php">Add admin</a></p>
            <h3>Fans :</h3>
            <p><a href="viewfans.php">View fans</a></p>
            <p><a href="addfans.php">Add fans</a></p>
            <h3>Bookers :</h3>
            <p><a href="viewbooker.php">View bookers</a></p>
            <p><a href="addbooker.php">Add bookers</a></p>
            <h3>Donors :</h3>
            <p><a href="viewdonor.php">View donors</a></p>
            <p><a href="adddonor.php">Add donors</a></p>
            <h3>Contact :</h3>
            <p><a href="viewcontact.php">View contact</a></p>
            <p><a href="addcontact.php">Add Contact</a></p>
            <h3>Sit :</h3>
            <p><a href="viewsit.php">View sit</a></p>
            <p><a href="addsit.php">Add sit</a></p>
            <h3>Players :</h3>
            <p><a href="viewplayer.php">View player</a></p>
            <p><a href="addplayer.php">Add player</a></p>
            <h3>Costumer 1 :</h3>
            <p><a href="viewcostumer1.php">View costumer1</a></p>
            <p><a href="addcostumer1.php">Add costumer1</a></p>
            <h3>Costumer 2 :</h3>
            <p><a href="viewcostumer2.php">View costumer2</a></p>
            <p><a href="addcostumer2.php">Add costumer2</a></p>
            <h3>Matches:</h3>
            <p><a href="viewmatch.php">View match</a></p>
            <p><a href="addmatch.php">Add match</a></p>
            <h3>Sponsers:</h3>
            <p><a href="viewsponser.php">View Sponsers</a></p>
            <p><a href="addsponser.php">Add Sponsers</a></p>
            <h3>Shirts:</h3>
            <p><a href="viewshirt.php">View shirt</a></p>
            <p><a href="addshirt.php">Add shirt</a></p>
     
        </div>
        </div>
    </div>
   </div>



          
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