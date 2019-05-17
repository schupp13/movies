<<<<<<< HEAD
<?php  session_start();
$userId = $_SESSION['id'];
$userName = $_SESSION['userName'];
$mystringstate = <<< EOT
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
         <img class="moviePoster" src="$movie->Poster" alt="">
      </div>
     <div class="col-lg-6 align-content-left justify-content-left">
       <h1 class="movieTitle">$movie->Title</h1>
     <p class="plot">$movie->Plot<p>
       <?   include 'reviewButton.php'; ?>
       <div id="demo" class="collapse">
       <form action="../reviewProcess.php" method="POST">
               <div class="form-group">
                 <label for="text"></label>
                 <textarea name="review" type="textarea" class="form-control" id="text" placeholder="Write a review."></textarea>
                 <input type="hidden" name="movie" value="$movie->imdbID">
                 <input type="hidden" name="user" value="$userId">
                 <input type="hidden" name="title" value="$movie->Title">
                 <input type="hidden" name="userName" value="$userName">
               </div>
               <button type="submit" style="margin-bottom: 40px;">Submit</button>
             </form>
     </div>
     </div>
   </div>
   </div>

   <ul id="tab" class="files">
     <li class="file">
       <a class="link active" data-toggle="tab" href="#actors" style="text-decoration: none; color: white;">Actors</a>
     </li>
     <li class="file">
       <a class="link" data-toggle="tab" href="#creative" style="text-decoration: none; color: white;">creative</a>
     </li>
     <li class="file">
       <a class="link" data-toggle="tab" href="#ratings" style="text-decoration: none; color: white;">Awards</a>
     </li>
     <li class="file">
       <a class="link" data-toggle="tab" href="#reviews" style="text-decoration: none; color: white;">Reviews</a>
     </li>
   </ul>

 </div>
</section>
<div class="container-fluid info">
    <!-- Tab panes -->
    <div class="tab-content">
      <div id="actors" class="container tab-pane active">
        <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <div>
                  <h1>Actors</h1>
                </div>
              </div>
            <div class="col-lg-9">
              <div>
                  <h3>$movie->Actors</h3>
              </div>
=======
<?
$mystringstate = <<< EOT
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>movie->Title</title>

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


    <link rel="stylesheet" href="../../css/moviePage.css">

  </head>
  <body>
    <div class="container text-center">
    <h1 class="movieTitle">$movie->Title</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img class="moviePoster" src="$movie->Poster" alt=""><br>

      </div>
      <div class="col-sm-6 align-content-left justify-content-left">
      <p class='plot'>$movie->Plot<p>
      <button data-toggle="collapse" data-target="#demo">Review</button>

        <div id="demo" class="collapse">
          <form action="/action_page.php">
            <div class="form-group">
              <label for="text"></label>
              <textarea type="textarea" class="form-control" id="text"></textarea>
            </div>
            <div class="form-group">
            <label for="starOne"><ion-icon name="star-outline"></ion-icon></i></label>

            <label for="starTwo"><i class="fas fa-star"></i></label>

            <label for="starThree"><i class="fas fa-star"></i></label>

            <label for="starFour"><i class="fas fa-star"></i></label>

            <label for="starFive"><i class="fas fa-star"></i></label>

            <label for="starFive"><i class="fas fa-star"></i></label>

            </div>
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>


    <ul class="nav nav-tabs nav-justified" margin="15px 0 30px 0;">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#actors">Actors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#creative">creative</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#ratings">Awards</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div id="actors" class="container tab-pane active"><br>
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div style="max-width:400px;">
                <h1>Actors</h1>
                  <h3>$movie->Actors</h3>
                </div>
>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29
            </div>
            </div>
          </div>
      </div>
<<<<<<< HEAD
      <div id="creative" class="container tab-pane">
        <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <div  class="text-center">
                  <h1>Director</h1>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="d-flex justify-content-left">
                  <h5>$movie->Director</h5>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3">
                <div  class="text-center">
                  <h1>Produced by</h1>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="d-flex justify-content-left">
                  <h5>$movie->Production</h5>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3">
                <div  class="text-center">
                  <h1>Writers</h1>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="d-flex justify-content-left">
                  <h5>$movie->Writer</h5>
                </div>
              </div>
            </div>
            </div>
          </div>
      <div id="ratings" class="container tab-pane">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div  class="text-center">
                <h1>Box Office</h1>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="d-flex justify-content-left">
                <h5>$movie->BoxOffice</h5>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div  class="text-center">
                <h1>Awards</h1>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="d-flex justify-content-left">
                <h5>$movie->Awards</h5>
                </div>
              </div>
            </div>
         </div>
        </div>
            <div id="reviews" class="container tab-pane">
              <div class="container">
                <div class="row text-center" >
                  <div id="movie">
                    <button type="button"><a href="../../reviews.php" style="text-decoration: none; color: white;">See Reviews</a></button>
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
=======
      <div id="creative" class="container tab-pane"><br>
        <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <div  class="justify-content-left">
                  <h1>Director</h1>
                  <h5>$movie->Director</h5>
                  <h1>Produced by</h1>
                  <h5>$movie->Production</h5>
                </div>
              </div>
              <div class="col-lg-9">
                <div "class="d-flex justify-content-left">
                  <h1>Writers</h1>
                  <h5>$movie->Writer</h5>
                </div>
            </div>
            </div>
          </div>
      </div>
      <div id="ratings" class="container tab-pane"><br>
        <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <div  class="justify-content-left">
                  <h1>BoxOffice</h1>
                  <h5>$movie->BoxOffice</h5>
                  <h1>Awards</h1>
                  <h5>$movie->Awards</h5>
                </div>
              </div>
              <div class="col-lg-9">
                <div "class="d-flex justify-content-left">
                  <h1>Ratings</h1>
                  <h5>IMBD RATINGS And Votes</h5>
                  <h5>IMBD Rating: $movie->imdbRating</h5>
                  <h5>Number of Votes: $movie->imdbVotes</h5>
                </div>
            </div>
            </div>
          </div>
      </div>
    </body>
    </html>

>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29
EOT;
$movie_url =  strtolower(preg_replace('/\s+/', '_',$movie->Title));
$myfile = fopen("process/film/{$movie_url}.php", "w") or die("Unable to open file!");
fwrite($myfile, $mystringstate);
fclose($myfile);
?>
<<<<<<< HEAD

<!-- plan B reviews tab button -->
<!-- <div id="movie">
  <button type="button"><a href="../../reviews.php" style="text-decoration: none; color: white;">See Reviews</a></button>
</div> -->

<!-- review tab -->
<!-- <div class="col-lg-3">
  <div>
    <h1>Username</h1>
  </div>
</div>
<div class="col-lg-9">
  <div>
    <h5>Review</h5>
  </div>
</div> -->
=======
>>>>>>> 6028a902b8a822b378ed04258ce0a721d8895c29
