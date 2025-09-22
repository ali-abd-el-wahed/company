<?php
require_once 'connection.php';
if(isset($_POST['email']) && $_POST['email']!=""
        && isset($_POST['pass']) && $_POST['pass']!="")   
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $query="SELECT * FROM admin WHERE email='$email' AND  pass='$pass'" ;
    
    $res= mysqli_query($con, $query);
    
    $nbrows= mysqli_num_rows($res);
    if($nbrows == 0)
    {
      echo '<script>alert("EMAIL OR PASSWORD IS INCORRECT , PLEASE TRY AGAIN !")</script>';
      
}
    else if($nbrows==1) {
        session_start();
        $_SESSION['isloggedin']=1;
        $_SESSION['email']=$email;
        header('Location:adminsPannel.php');
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>LOGIN FORM</title>
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
                <li class="active"><a href="loginAdmin.php" class="nav-link">LG for ADMINS</a></li>
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
            <h1 class="text-white"> ONLY ADMIN'S LOG IN !</h1>
            
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <form action="loginAdmin.php" method="POST">
            <h1 class="text-white">PLEASE ENTER YOUR AMIN INFORMATIONS  : </h1> <br>
            <p>ADMIN'S EMAIL :</p>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" required>
              </div>
              <p>ADMIN'S PASSWORD :</p>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" minlength="8" name="pass" required>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary py-3 px-5" value="LOG IN!"> 
              </div>
            </form> 
            </div>
         
            <div class="col-lg-4 ml-auto">
            
            <ul class="list-unstyled">
              <li class="mb-2">
                <strong class="text-white d-block">Address</strong>
                Munchen , Germany <br> Mu. 10011
              </li>
              <li class="mb-2">
                <strong class="text-white d-block">Email</strong>
                <a href="#">ahal.neustad@info.com</a>
              </li>
              <li class="mb-2">
                <strong class="text-white d-block">
                  Phone
                </strong>
                <a href="#">+12 345 6789 012</a>
              </li>
            </ul>
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