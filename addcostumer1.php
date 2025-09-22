<?php
require_once 'connection.php';
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:loginAdmin.php");
} else {
if(isset($_GET['name']) && ($_GET['name']!="")
        && isset($_GET['email']) && ($_GET['email']!="")
        && isset($_GET['phone']) && ($_GET['phone']!="")
        && isset($_GET['player']) && ($_GET['player']!="")
        && isset($_GET['kit']) && ($_GET['kit']!="")
        && isset($_GET['quantity']) && ($_GET['quantity']!="")
        && isset($_GET['cc']) && ($_GET['cc']!="")
        && isset($_GET['total']) && ($_GET['total']!=""))
{
  $name=$_GET['name'];  
  $email=$_GET['email'];
    $phone=$_GET['phone'];
    $player=$_GET['player'];
    $kit=$_GET['kit'];  
  $quantity=$_GET['quantity'];
    $cc=$_GET['cc'];
    $total=$_GET['total'];
    
    
    $query = "INSERT INTO `costumer1`(`name`, `email`, `phone_number`, `player`, `jersey`, `quantity`, `cnumber`, `total_price`)
              VALUES ('$name', '$email', '$phone', '$player', '$kit', '$quantity', '$cc', '$total')";    //echo $query;
    $result= mysqli_query($con, $query);
    
    If(!$result)
    {
        die("error in insert command");
    }
    else
    {
        echo("a new costumer has been inserted successfully");
    } 
}}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>ADDING A costumer 1</title>
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
                <li ><a href="registration.php" class="nav-link">Registration</a></li>
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
            <h1 class="text-white">ADD COSTUMER 1</h1>
          
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <form action="addcostumer1.php" method="GET">
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
              <p>SELECT PLAYER :</p>
              <div class="form-group">
                  <select class="form-control" name="player">
                      <?php
                      $mysqli = new mysqli("localhost", "root", "", "ahal neustad");
          
                      if ($mysqli->connect_error) {
                          die("Connection failed: " . $mysqli->connect_error);
                      }
          
                      $query = "SELECT players.number, players.name, players.last_name FROM players";
                      $result = $mysqli->query($query);
          
                      while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['number'] . ' - ' . $row['name'] . ' ' . $row['last_name'] . '">' . $row['number'] . ' - ' . $row['name'] . ' ' . $row['last_name'] . '</option>';
                      }
          
                      $mysqli->close();
                      ?>
                  </select>
              </div>
              <p>SELECT THE JERSEY :</p>
              <div class="form-group">
                  <select class="form-control" name="kit">
                      <?php
                      $mysqli = new mysqli("localhost", "root", "", "ahal neustad");
          
                      if ($mysqli->connect_error) {
                          die("Connection failed: " . $mysqli->connect_error);
                      }
          
                      $query = "SELECT shirts.season, shirts.type FROM shirts";
                      $result = $mysqli->query($query);
          
                      while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['season'] . ' - ' . $row['type'] . '">' . $row['season'] . ' - ' . $row['type'] . '</option>';

                      }
          
                      $mysqli->close();
                      ?>
                  </select>
              </div>
              <p>ENTER THE QUANTITY :</p>
               <div class="form-group">
             <input type="number" class="form-control" name="quantity" placeholder="quantity" id="quantity" value="1" oninput="updateTotalPrice()" required>
            </div>       
              
               <p>ENTER YOUR CARD INFORMATIONS :</p>    
               <label for="card_number">Card Number     :</label>
               <div class="form-group">
               <input type="text" id="card_number" name="cc" placeholder="XXXX-XXXX-XXXX-XXXX" maxlength="16" required>
               </div>

                <script>
function updateTotalPrice() {
  var quantity = parseInt(document.getElementById('quantity').value);
  var unitPrice = 50;
  var totalPrice = quantity * unitPrice;
  
  document.getElementById('amount').value = '$' + totalPrice.toFixed(2);
}
</script>

<label for="cvv">TOTAL PRICE :</label>
<div class="form-group">
  <input type="text" id="amount" name="total" placeholder="amount" value="$50.00" readonly>
</div>

<br>

   
              <div class="form-group">
                <input type="submit" class="btn btn-primary py-3 px-5" value="ADD COSTUMER 1  !">
              </div>
            </form>  
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
