<?php

require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Soccer &mdash; Website by Colorlib</title>
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
                <li class="active"><a href="matches.php" class="nav-link">Matches</a></li>
                <li><a href="players.php" class="nav-link">Team</a></li>
                <li><a href="shirt1.php" class="nav-link">Shop</a></li>
                <li><a href="registration.php" class="nav-link">Registrtion</a></li>
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
          <div class="col-lg-5 mx-auto text-center">
            <h1 class="text-white">MATCHES</h1>
            <p>In the hallowed arena of competition, our club's matches unfold as a symphony of skill and passion, painting the canvas of camaraderie with vibrant strokes of teamwork and determination</p>
          </div>
        </div>
      </div>
    </div>

    
    
    

    
    <div class="site-section bg-dark">
      <div class="container">
        
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="widget-next-match">
              <div class="widget-title">
                <h3>Next Match</h3>
              </div>
              <div class="widget-body mb-3">
                <div class="widget-vs">
                  <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                    <div class="team-1 text-center">
                      <img src="images/logo_1.png" alt="Image"><hr>
                      <h3>AHAL NEUSTAD</h3>
                    </div>
                    <div>
                      <span class="vs"><span>VS</span></span>
                    </div>
                    <div class="team-2 text-center">
                      <img src="images/logo_5.png" alt="Image" width="90px" height="90px"><hr>
                      <h3>LIVERPOOL</h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="text-center widget-vs-contents mb-4">
                <h4><a href="https://www.uefa.com/uefachampionsleague/"> UEFA CHAMPIONS LEAGUE</a></h4>
                <p class="mb-5">
                  <span class="d-block">July 20th, 2023</span>
                  <span class="d-block">9:30 AM GMT+0</span>
                  <strong class="text-primary"><a href="https://goo.gl/maps/FCPxJ5iYrgfoc3seA">ANFIELD ROAD </a></strong>
                </p>
                <button type="submit" class="btn btn-primary py-3 px-4 mr-3"><a href="booking.php" style="color: white; text-decoration: none;">Book Ticket</a></button>

              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Upcoming Match</h2>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo_1.png" alt="Image">
                        <hr>
                        <h3>AHAL NEUSTAD</h3>
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
                      <div class="team-2 text-center">
                        <img src="images/logo_2.png" alt="Image" width="90px" height="90px"><hr>
                        <h3>P.S.G</h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                  <h4><a href="https://www.uefa.com/uefachampionsleague/"> UEFA CHAMPIONS LEAGUE</a></h4>
                  <p class="mb-5">
                    <span class="d-block">July 27th, 2023</span>
                    <span class="d-block">9:30 AM GMT+0</span>
                    <strong class="text-primary"><a href="https://goo.gl/maps/JxwFboqGXJWKbBrJA"> PARC DES PRINCES</a></strong>
                  </p>
                  <button type="submit" class="btn btn-primary py-3 px-4 mr-3"><a href="booking.php" style="color: white; text-decoration: none;">Book Ticket</a></button>
                </div>
              
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo_1.png" alt="Image"><hr>
                        <h3>AHAL NEUSTAD</h3>
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
                      <div class="team-2 text-center">
                        <img src="images/logo_4.png" alt="Image" width="90px" height="90px"><hr>
                        <h3>BORUSSIA DORTMUND </h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                  <h4><a href="https://www.bundesliga.com/en/bundesliga">BUNDESLIGA</a></h4>
                  <p class="mb-5">
                    <span class="d-block">Octobre 5th, 2023</span>
                    <span class="d-block">4:30 AM GMT+0</span>
                    <strong class="text-primary"><a href="https://goo.gl/maps/RzgQJesAdZoBypzf6">SIGNAL IDUNA PARK</a></strong>
                  </p>
                  <button type="submit" class="btn btn-primary py-3 px-4 mr-3"><a href="booking.php" style="color: white; text-decoration: none;">Book Ticket</a></button>
                </div>
              
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo_1.png" alt="Image"><hr>
                        <h3>AHAL NEUSTAD</h3>
                      </div>
                      <div >
                        <span class="vs"><span>VS</span></span>
                      </div>
                      <div class="team-2 text-center">
                        <img src="images/logo_7.png" alt="Image" height="95px"><hr>
                        <h3>TOTTENHAM</h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                  <h4>CLUB FRIENDLIES</h4>
                  <p class="mb-5">
                    <span class="d-block"> Octobre 15th, 2023</span>
                    <span class="d-block">1:30 AM GMT+0</span>
                    <strong class="text-primary">New Euro Arena</strong>
                  </p>
                  <button type="submit" class="btn btn-primary py-3 px-4 mr-3"><a href="booking.php" style="color: white; text-decoration: none;">Book Ticket</a></button>
                </div>
              
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo_1.png" alt="Image"><hr>
                        <h3>AHAL NEUSTAD</h3>
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
                      <div class="team-2 text-center">
                        <img src="images/logo_8.png" alt="Image"><hr>
                        <h3>REAL BETIS</h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                  <h4>CLUB FRIENDLIES</h4>
                  <p class="mb-5">
                    <span class="d-block">November 1th, 2023</span>
                    <span class="d-block">3:30 AM GMT+0</span>
                    <strong class="text-primary"><a href="https://goo.gl/maps/UG3egjqcDRiHkQi27">ESTADIO BENITO VILLAMARIN</a></strong>
                  </p>
                  <button type="submit" class="btn btn-primary py-3 px-4 mr-3"><a href="booking.php" style="color: white; text-decoration: none;">Book Ticket</a></button>
                </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </div> <!-- .site-section -->

    


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
  <!-- .site-wrap -->

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