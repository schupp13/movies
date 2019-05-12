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
            </div>
            </div>
          </div>
      </div>
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

EOT;
$movie_url =  strtolower(preg_replace('/\s+/', '_',$movie->Title));
$myfile = fopen("process/film/{$movie_url}.php", "w") or die("Unable to open file!");
fwrite($myfile, $mystringstate);
fclose($myfile);
?>
