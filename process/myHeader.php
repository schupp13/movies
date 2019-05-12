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
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu"><a href="index.php">Home</a></li>
          <!-- <li><a href="#about">About Us</a></li> -->
          <li class="menu"><a href="reviews.php">Reviews</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a href="#team">Team</a></li> -->
          <li class="menu-has-children"><a href="movies.php" data-filter=".filter-captain_america, .filter-captain_marvel, .filter-iron_man, .filter-hulk, .filter-thor, .filter-avengers, .filter-guardians_of_the_galaxy, .filter-ant_man, .filter-doctor_strange, .filter-spider_man, .filter-black_panther">Movies</a>
            <ul>
              <li><a href="movies.php" data-filter=".filter-captain_america">Captain America</a></li>
              <li><a href="movies.php" data-filter=".filter-captain_marvel">Captain Marvel</a></li>
              <li><a href="movies.php" data-filter=".filter-iron_man">Iron Man</a></li>
              <li><a href="movies.php" data-filter=".filter-hulk">The Incredible Hulk</a></li>
              <li><a href="movies.php" data-filter=".filter-thor">Thor</a></li>
              <li><a href="movies.php" data-filter=".filter-avengers">The Avengers</a></li>
              <li><a href="movies.php" data-filter=".filter-guardians_of_the_galaxy">Guardians of the Galaxy</a></li>
              <li><a href="movies.php" data-filter=".filter-ant-man">Ant-Man</a></li>
              <li><a href="movies.php" data-filter=".filter-dorcot_strange">Doctor Strange</a></li>
              <li><a href="movies.php" data-filter=".filter-spider-man">Spider-man: Homecoming</a></li>
              <li><a href="movies.php" data-filter=".filter-black-panther">Black Panther</a></li>
          </li>
            </ul>
          <!-- <li><a href="#contact">Contact Us</a></li> -->
          <? if(isset($_SESSION['firstName'])){
            echo '<li><a href="userProfile.php">Your Profile</a></li>';
            echo '<li><a href="process/signOut.php">Sign Out</a></li>';

          }else{
          echo '<li><a href="signup.php">Sign Up</a></li>';
          echo '<li><a href="login.php">Log In</a></li>';
          }  ?>

          <!-- <li><a class="admin" href="admin.php"><img style="height: 15px;" src="img/admin.png" alt="" title=""></img></a></li> -->
        </ul>


      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
