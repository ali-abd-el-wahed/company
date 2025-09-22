<?php

require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home Page</title>
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
              <a href='logout.php' style="color:white"> logout</a>
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="matches.php" class="nav-link">Matches</a></li>
                <li><a href="players.php" class="nav-link">Team</a></li>
                <li><a href="shirt1.php" class="nav-link">Shop</a></li>
                <li><a href="registration.php" class="nav-link">Registrtion</a></li>
                <li><a href="loginClient.php" class="nav-link">LG for FAN </a></li>
                <li><a href="loginAdmin.php" class="nav-link">LG for ADMINS</a></li>
              </ul>
            </nav>
          
          </div>
        </div>
      </div>

    </header>

    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 ml-auto">
            <h1 class="text-white">115th ANNIVERSARY</h1>
            <p style="text-align: center;">On 24th of January 2024,  we  will celebrate the cherished anniversary of our beloved football club,pass,forever united in the pursuit of greatness.</p>
            <div id="countdown"></div>

            <script>
             
              const targetDate = new Date('January 23, 2024 00:00:00');
          
            
              function getTimeRemaining(endTime) {
                const totalSeconds = (endTime - new Date()) / 1000;
          
                const days = Math.floor(totalSeconds / (24 * 60 * 60));
                const hours = Math.floor((totalSeconds % (24 * 60 * 60)) / (60 * 60));
                const minutes = Math.floor((totalSeconds % (60 * 60)) / 60);
                const seconds = Math.floor(totalSeconds % 60);
          
                return {
                  totalSeconds,
                  days,
                  hours,
                  minutes,
                  seconds
                };
              }
          
              // Function to update the countdown
              function updateCountdown() {
                const time = getTimeRemaining(targetDate);
          
                // Display the countdown
                const countdownElement = document.getElementById('countdown');
                countdownElement.innerHTML = ` ${time.days} days, ${time.hours} hours, ${time.minutes} minutes, ${time.seconds} seconds`;
          
                // Check if the countdown has ended
                if (time.totalSeconds <= 0) {
                  clearInterval(countdownInterval);
                  countdownElement.innerHTML = "Countdown has ended!";
                }
              }
          
              // Update the countdown immediately
              updateCountdown();
          
              // Update the countdown every second
              const countdownInterval = setInterval(updateCountdown, 1000);
            </script>
  <button type="submit" class="btn btn-primary py-3 px-4 mr-3"><a href="donation.php" style="color: white; text-decoration: none;">DONATE FOR US</a></button>
          </div>
        </div>
      </div>
    </div>

    
    <div class="container">
      
      <div class="row">
        <div class="col-lg-12">
  
          <div class="d-flex team-vs">
           
            <span class="score">4-1</span>
            <div class="team-1 w-50">
              <div class="team-details w-100 text-center">
                <img src="images/logo_1.png" alt="Image" class="img-fluid" ><hr>
                <h3>AHAL NEUSTAD</h3>
                <ul class="list-unstyled">
                  <li>Anja Landry ('7)</li>
                  <li>Eadie Salinas ('20)</li>
                  <li>Ashton Allen ('56)</li>
                  <li>Baxter Metcalfe ('70)</li>
                </ul>
              </div>
            </div>
            <div class="team-2 w-50">
              <div class="team-details w-100 text-center">
                <img src="images/logo_6.png" alt="Image"  width="75px" height="75px"><hr>
                <h3>FRANKFURT </h3>
                <ul class="list-unstyled">
                  <li>KOLOU MUANNE ('3)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      
      
      </div>
    </div>
  

    <div class="latest-news">
      <div class="container">
        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">LASTEST TRANSFERS </h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid" width="800px" height="800px">
              </a>
              <div class="caption">
                <div class="caption-inner"> 
                  <h3 class="mb-3">Laimer to AHAL NEUSTAD</h3>
                  <div class="author d-flex align-items-center">
                    <div class="text">
                      <h4>Welcome to AHAL , Kornad !</h4>
                      <span>JUNE 12, 2023 &bullet; NEWS</span>
                      <p ><a href="#trans" style="color: rgba(255, 87, 87, 0.993); text-shadow: 1px;" >Read more</a></p>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">Lucas Hernandez to PSG !</h3>
                  <div class="author d-flex align-items-center">
                   
                    <div class="text">
                      <h4>All the good luck in ur carrer Lucas !</h4>
                      <span>JUNE 14, 2023 &bullet; NEWS</span>
                      <p ><a href="#trans" style="color: rgba(255, 87, 87, 0.993); text-shadow: 1px;" >Read more</a></p>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">Sbitzer will come back from the loan this summer  !</h3>
                  <div class="author d-flex align-items-center">
                    
                    <div class="text">
                      <h4>Servus Marciel!</h4>
                      <span>June  27, 2023 &bullet; News</span>
                      <p ><a href="#trans" style="color: rgba(255, 87, 87, 0.993); text-shadow: 1px;" >Read more</a></p>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>

      </div>
    </div>
    
    <div class="site-section bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
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
                        <button type="submit" class="btn btn-primary py-3 px-4 mr-3" style="background-color: rgb(255, 6, 6);">Book Ticket</button>
                      </div>
                    </div>
                  </div>

                
          <div class="col-lg-6">
            
            <div class="widget-next-match">
             
<table class="table custom-table">
  <thead>
    <tr style="background-color: rgb(3, 0, 177);">
      <th>P</th>
      <th>Team</th>
      <th>W</th>
      <th>D</th>
      <th>L</th>
      <th>PTS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td><strong class="text-white">AHAL NEUSTAD</strong></td>
      <td>12</td>
      <td>2</td>
      <td>0</td>
      <td>38</td>
    </tr>
    <tr>
      <td>2</td>
      <td><strong class="text-white">HEIDENHEIM</strong></td>
      <td>10</td>
      <td>3</td>
      <td>1</td>
      <td>33</td>
    </tr>
    <tr>
      <td>3</td>
      <td><strong class="text-white">JAHN-REGENSBURG</strong></td>
      <td>8</td>
      <td>3</td>
      <td>3</td>
      <td>27</td>
    </tr>
    <tr>
      <td>4</td>
      <td><strong class="text-white">KARLSRUHER</strong></td>
      <td>7</td>
      <td>4</td>
      <td>3</td>
      <td>25</td>
    </tr>
    <tr>
      <td>5</td>
      <td><strong class="text-white">BORRUSIA DORTMUND</strong></td>
      <td>6</td>
      <td>5</td>
      <td>3</td>
      <td>23</td>
    </tr>
    <tr>
      <td>6</td>
      <td><strong class="text-white">FCK</strong></td>
      <td>5</td>
      <td>5</td>
      <td>4</td>
      <td>20</td>
    </tr>
    <tr>
      <td>7</td>
      <td><strong class="text-white">DARMSTADT</strong></td>
      <td>4</td>
      <td>6</td>
      <td>4</td>
      <td>18</td>
    </tr>
    <tr>
      <td>8</td>
      <td><strong class="text-white">HANSA</strong></td>
      <td>3</td>
      <td>7</td>
      <td>4</td>
      <td>16</td>
    </tr>

  </tbody>
</table>
            </div>

          </div>
        </div>
      </div>
    </div> <!-- .site-section -->

    <div class="container site-section">
      <div class="row">
        <div class="col-6 title-section">
          <h2 class="heading" id="trans">TRANSFERS : </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">JUNE 12, 2023</span>
              <h3 class="mb-4"><b> " - KORNAD LAIMER TO AHAL ; "</b></h3>
              <p>Konrad Laimer has joined AHAL on a contract until 30 June 2027. The 26-year-old central midfielder moves to NEUSTAD on a free transfer from DFB Cup winners RB Leipzig.</p>
              <p>Konrad Laimer:<b><i> "It's a dream come true for me. AHAL is one of the biggest clubs in the world. I will give everything for the club and the fans. Ahal Neustad always has the highest goals . I'm in the right place here.</i></b></p>
            
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">JUNE 14, 2023</span>
              <h3 class="mb-4"> <b>" - LUCAS HERNANDEZ TO PSG  ; "</b></h3>
              <p> 
                PSG line up another summer signing as Lucas Hernandez tells Ahal  he wants to leave for Ligue 1 champions - with €60 million fee set. Paris Saint-Germain are set to sign Ahal Neustad centre-back Lucas Hernandez, continuing an already busy summer</p>
              <p>Hernandez has informed AHAL that he wants to leave the club for PSG, who are the frontrunners for his signature.Hernandez is currently recovering from a torn ACL sustained at the World Cup, but should be nearing fitness by the start of next season. </p>
            </div>
          </div>
        </div>
      </div>
     <br/>
     <br/>
     <br/>
     <br/>
      <div class="row">
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">JUNE 27 2020</span>
              <h3 class="mb-4"><b>" - SABITZER WILL COME BACK FORM UNITED THIS SUMMER ; "</b></h3>
              <p>Manchester United announces Ahal Neustad loanee Marcel Sabitzer is out for the season</p>
              <p>
                Sabitzer will return to Ahal Neustad this summer, but there are rumors that Manchester United could have interest in keeping the Austrian. Even if that does not work out, Sabitzer performed at such a high level that he will undoubtedly have many suitors calling his name this summer.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="brands">
 <div class="small-container">
  <div class="row">
    <div class="col-3">
      <img src="brands/telekom.png" alt="telekom" width="150px" height="90px"/>
    </div>
    <div class="col-3">
      <img src="brands/adidas.png" alt="adidas" width="150px" height="140px"/>
    </div>
    <div class="col-3">
      <img src="brands/qatar.png" alt="qatar" width="150px" height="130px"/>
    </div>
  </div>
  

    <footer class="footer-section" style="background-color: rgb(56, 12, 12) ;">
      <div class="container site-section">
      <div class="row">
        <div class="col-6 title-section">
          <h2 class="heading" >Contact Us : </h2>
        </div>
      </div>
    </div>
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <form action="contact.php">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea name="message" class="form-control" id="" cols="30" rows="10" placeholder="Write something..."></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary py-3 px-5" value="Send Message">
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
          </div>
        </div>
      </div>
   
      
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