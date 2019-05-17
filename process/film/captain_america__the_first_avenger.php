<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MushyBananas header</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="../../img/favicon.png" rel="icon">
  <link href="../../img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../lib/animate/animate.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="../../css/style.css" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<body>
  <!--==========================
  Header
  ============================-->
  <header id="movieheader" class"header-fixed" style="background: rgba(52, 59, 64, 0.9); padding: 20px 0; height: 72px; transition: all 0.5s;">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="../../index.php"><img style="height: 40px;" src="../../img/logo.png" alt="" title="" /></img></a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu"><a href="../../index.php" style="text-decoration: none; color: white;">Home</a></li>
          <li class="menu"><a href="../../reviews.php" style="text-decoration: none; color: white;">Reviews</a></li>
          <li class="menu-has-children"><a href="../../movies.php" style="text-decoration: none; color: white;">Movies</a>
            <ul>
              <li><a class="menu-has-children" href="#" style="text-decoration: none;">Captain America</a>
                  <ul>
                    <li><a href="captain_america:_the_first_avenger.php" style="text-decoration: none;">The First Avenger</a></li>
                    <li><a href="captain_america:_the_winter_soldier.php" style="text-decoration: none;">The Winter Soldier</a></li>
                    <li><a href="captain_america:_civil_war.php" style="text-decoration: none;">Civil War</a></li>
                  </ul>
               </li>
              <li><a href="captain_marvel.php" style="text-decoration: none;">Captain Marvel</a></li>
              <li><a class="menu-has-children" href="#">Iron Man</a>
                  <ul>
                    <li><a href="iron_man.php" style="text-decoration: none;">Iron Man</a></li>
                    <li><a href="iron_man_2.php" style="text-decoration: none;">Iron Man 2</a></li>
                    <li><a href="iron_man_3.php" style="text-decoration: none;">Iron Man 3</a></li>
                  </ul>
                </li>
              <li><a href="the_incredible_hulk.php" style="text-decoration: none;">The Incredible Hulk</a></li>
              <li><a class="menu-has-children" href="#" style="text-decoration: none;">Thor</a>
                  <ul>
                    <li><a href="thor.php" style="text-decoration: none;">The God of Thunder</a></li>
                    <li><a href="thor:_the_dark_world.php" style="text-decoration: none;">The Dark World</a></li>
                    <li><a href="thor:_ragnarok.php" style="text-decoration: none;">Ragnarok</a></li>
                  </ul>
                </li>
              <li><a class="menu-has-children" href="#" style="text-decoration: none;">The Avengers</a>
                    <ul>
                      <li><a href="the_avengers.php" style="text-decoration: none;">The Avengers</a></li>
                      <li><a href="avengers:_age_of_ultron.php" style="text-decoration: none;">Age of Ultron</a></li>
                      <li><a href="avengers:_infinity_war.php" style="text-decoration: none;">Infinity Wars</a></li>
                      <li><a href="avengers:_endgame.php" style="text-decoration: none;">Endgame</a></li>
                    </ul>
                  </li>
              <li><a class="menu-has-children" href="#" style="text-decoration: none;">Guardians of the Galaxy</a>
                    <ul>
                      <li><a href="guardians_of_the_galaxy.php" style="text-decoration: none;">Guardians of the Galaxy</a></li>
                      <li><a href="guardians_of_the_galaxy_vol._2.php" style="text-decoration: none;">Guardians of the Galaxy: Volume 2</a></li>
                    </ul>
                  </li>
              <li><a class="menu-has-children" href="#" style="text-decoration: none;">Ant-Man</a>
                    <ul>
                      <li><a href="ant-man.php" style="text-decoration: none;">Ant Man</a></li>
                      <li><a href="ant-man_and_the_wasp.php" style="text-decoration: none;">Ant Man & The Wasp</a></li>
                    </ul>
                  </li>
              <li><a href="doctor_strange.php" style="text-decoration: none;">Doctor Strange</a></li>
              <li><a href="spider-man.php" style="text-decoration: none;">Spider-man</a></li>
              <li><a href="black_panther.php" style="text-decoration: none;">Black Panther</a></li>
          </li>
            </ul>
            <?   include 'code.php'; ?>


          <!-- <li><a class="admin" href="admin.php"><img style="height: 15px;" src="img/admin.png" alt="" title=""></img></a></li> -->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

<section id="hero3">
 <div class="hero-container">
   <div class="container" id="movie">
     <div class="row">
       <div class="col-lg-6">
         <img class="moviePoster" src="http://img.omdbapi.com/?i=tt0458339&h=600&apikey=579b4fff" alt="">
      </div>
     <div class="col-lg-6 align-content-left justify-content-left">
       <h1 class="movieTitle">Captain America: The First Avenger</h1>
     <p class="plot">Steve Rogers, a rejected military soldier transforms into Captain America after taking a dose of a "Super-Soldier serum". But being Captain America comes at a price as he attempts to take down a war monger and a terrorist organization.<p>
       <?   include 'reviewButton.php'; ?>
       <div id="demo" class="collapse">
       <form action="../reviewProcess.php" method="POST">
               <div class="form-group">
                 <label for="text"></label>
                 <textarea name="review" type="textarea" class="form-control" id="text" placeholder="Write a review."></textarea>
                 <input type="hidden" name="movie" value="tt0458339">
                 <input type="hidden" name="user" value="22">
                 <input type="hidden" name="title" value="Captain America: The First Avenger">
                 <input type="hidden" name="userName" value="pookerbutt">
               </div>
               <button type="submit" style="margin-bottom: 40px;">Submit</button>
             </form>
     </div>
     </div>
   </div>
   </div>



 </div>
</section>
<div class="container-fluid info">
<div id="accordion">

  <div class="card  bg-warning">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapseOne" style="font-size:30px; color: black; display:block; text-align:center;">
        Actors
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body text-center">
        <h3>Chris Evans, Hayley Atwell, Sebastian Stan, Tommy Lee Jones</h3>
      </div>
    </div>
  </div>

  <div class="card  bg-warning">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo" style="font-size:30px; color: black; display:block; text-align:center;">
      Creative
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body text-center">
        <h3>Director</h3>
        <h5>Joe Johnston</h5>
        <h3>Produced By:</h3>
        <h5>Paramount Pictures</h5>
        <h3>Writers</h3>
        <h5>Christopher Markus (screenplay), Stephen McFeely (screenplay), Joe Simon (comic books), Jack Kirby (comic books)</h5>
      </div>
    </div>
  </div>

  <div class="card  bg-warning">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree" style="font-size:30px; color: black; display:block; text-align:center;">
        Awards
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body text-center">
        <h3>BoxOffice</h3>
        <h5>$176,636,816</h5>
        <h3>Awards</h3>
        <h5>3 wins & 46 nominations.</h5>
      </div>
    </div>
  </div>
  <div class="card  bg-warning">
    <div class="card-header text-center">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour" style="font-size:30px; color: black; display:block; text-align:center; ">
        Review
      </a>
    </div>
    <div id="collapseFour" class="collapse" data-parent="#accordion">
      <div class="card-body text-center">
          <button type="button" class="btn btn-dark"><a href="../../reviews.php" style="text-decoration: none; color: white;">See Reviews</a></button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!--==========================
Footer
============================-->
<footer id="footer">
<div class="footer-top">
<div class="container">
</div>
</div>
<div class="container">
<div class="copyright">
 &copy; Copyright <strong>Regna</strong>. All Rights Reserved
</div>
<div class="credits">
 <!--
   All the links in the footer should remain intact.
   You can delete the links only if you purchased the pro version.
   Licensing information: https://bootstrapmade.com/license/
   Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
 -->
 Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
</div>
</div>
</footer><!-- #footer -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>
<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
</body>
</html>