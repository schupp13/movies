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
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

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
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.php"><img style="height: 40px;" src="img/logo.png" alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu"><a href="index.php">Home</a></li>
          <li class="menu"><a href="reviews.php">Reviews</a></li>
          <li class="menu-has-children"><a href="movies.php">Movies</a>
            <ul>
              <li><a class="menu-has-children" href="#">Captain America</a>
                  <ul>
                    <li><a href="process/film/captain_america:_the_first_avenger.php">The First Avenger</a></li>
                    <li><a href="process/film/captain_america:_the_winter_soldier.php">The Winter Soldier</a></li>
                    <li><a href="process/film/captain_america:_civil_war.php">Civil War</a></li>
                  </ul>
               </li>
              <li><a href="process/film/captain_marvel.php">Captain Marvel</a></li>
              <li><a class="menu-has-children" href="#">Iron Man</a>
                  <ul>
                    <li><a href="process/film/iron_man.php">Iron Man</a></li>
                    <li><a href="process/film/iron_man_2.php">Iron Man 2</a></li>
                    <li><a href="process/film/iron_man_3.php">Iron Man 3</a></li>
                  </ul>
                </li>
              <li><a href="process/film/the_incredible_hulk.php">The Incredible Hulk</a></li>
              <li><a class="menu-has-children" href="#">Thor</a>
                  <ul>
                    <li><a href="process/film/thor.php">The God of Thunder</a></li>
                    <li><a href="process/film/thor:_the_dark_world.php">The Dark World</a></li>
                    <li><a href="process/film/thor:_ragnarok.php">Ragnarok</a></li>
                  </ul>
                </li>
              <li><a class="menu-has-children" href="#">The Avengers</a>
                    <ul>
                      <li><a href="process/film/process/film/the_avengers.php">The Avengers</a></li>
                      <li><a href="process/film/avengers:_age_of_ultron.php">Age of Ultron</a></li>
                      <li><a href="process/film/avengers:_infinity_war.php">Infinity Wars</a></li>
                      <li><a href="process/film/avengers:_endgame.php">Endgame</a></li>
                    </ul>
                  </li>
              <li><a class="menu-has-children" href="#">Guardians of the Galaxy</a>
                    <ul>
                      <li><a href="process/film/guardians_of_the_galaxy.php">Guardians of the Galaxy</a></li>
                      <li><a href="process/film/guardians_of_the_galaxy_vol._2.php">Guardians of the Galaxy: Volume 2</a></li>
                    </ul>
                  </li>
              <li><a class="menu-has-children" href="#">Ant-Man</a>
                    <ul>
                      <li><a href="process/film/ant-man.php">Ant Man</a></li>
                      <li><a href="process/film/ant-man_and_the_wasp.php">Ant Man & The Wasp</a></li>
                    </ul>
                  </li>
              <li><a href="process/film/doctor_strange.php">Doctor Strange</a></li>
              <li><a href="process/film/spider-man.php">Spider-man</a></li>
              <li><a href="process/film/black_panther.php">Black Panther</a></li>
          </li>
            </ul>
            <? if(isset($_SESSION["id"])){
                              echo '<li><a href="yourProfile.php">Your Profile</a></li>';
                              echo '<li><a href="process/signOut.php">Sign Out</a></li>';
                        }else{
                          echo '<li><a href="signup.php">Sign Up</a></li>';
                          echo '<li><a href="login.php">Log In</a></li>';
                        }?>


                      <?php
                    if(isset($_SESSION["admin"])){
                          echo '<li><a href="admin.php">Admin</a></li>';
                        }
                      ?>
          <!-- <li><a class="admin" href="admin.php"><img style="height: 15px;" src="img/admin.png" alt="" title=""></img></a></li> -->
        </ul>


      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
