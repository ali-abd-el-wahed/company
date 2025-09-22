<?php
require_once 'connection.php';
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:loginAdmin.php");
} else {
$query1="Select * FROM sit";
$result1= mysqli_query($con, $query1);
$nbr= mysqli_num_rows($result1);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>VIEW  SIT</title>
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
                <li><a href="shop.php" class="nav-link">Shop</a></li>
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
            <h1 class="text-white">VIEW SIT</h1>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
    <table border='5'>
    <tr>
        <th>CLASS</th>
        <th>COST</th>
        <th>EDIT</th>
        <th>DELETE</th>
</tr>
    
<?php
for ($i = 0; $i < $nbr; $i++) {
    $row = mysqli_fetch_assoc($result1);
    echo "<tr>";
    echo "<td>$row[class]</td>";
    echo "<td>$row[cost]</td>";
    echo '<td><a href="editsit1.php?class=' . $row['class'] . '"><img src="edit.png" alt="edit"></a></td>';
    echo '<td><a href="deletesit.php?class=' . $row['class'] . '"><img src="drop.png" alt="delete"></a></td>';

}
echo "</table>";
?>

                          
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