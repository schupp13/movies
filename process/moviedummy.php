<?  include_once 'movieHeader.php'; ?>

<section id="hero3">
  <div class="hero-container">



    <div class="container" id="movie">

      <div class="row">

        <div class="col-sm-6">
          <img class="moviePoster" src="http://img.omdbapi.com/?i=tt2015381&h=600&apikey=579b4fff" alt="">
       </div>


      <div class="col-sm-6 align-content-left justify-content-left">
        <h1 class="movieTitle">GUARDIANS OF THE GALAXY</h1>
      <p class="plot">A group of intergalactic criminals must pull together to stop a fanatical warrior with plans to purge the universe.<p>
      <button data-toggle="collapse" data-target="#demo">Review</button>

        <div id="demo" class="collapse">
          <form action="/action_page.php">
            <div class="form-group">
              <label for="text"></label>
              <textarea type="textarea" class="form-control" id="text"></textarea>
            </div>
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
      </div>
    </div>




    <ul id="nav" class="nav nav-tabs nav-justified">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#actors">Actors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#creative">creative</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#ratings">Awards</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#reviews">Reviews</a>
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
                  <h3>Chris Pratt, Zoe Saldana, Dave Bautista, Vin Diesel</h3>
              </div>
            </div>
            </div>
          </div>
      </div>


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
                  <h5>James Gunn</h5>
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
                  <h5>Walt Disney Pictures</h5>
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
                  <h5>James Gunn, Nicole Perlman, Dan Abnett (based on the Marvel comics by), Andy Lanning (based on the Marvel comics by), Bill Mantlo (character created by: Rocket Raccoon), Keith Giffen (character created by: Rocket Raccoon), Jim Starlin (characters created by: Drax the Destroyer, Gamora & Thanos), Steve Englehart (character created by: Star-Lord), Steve Gan (character created by: Star-Lord), Steve Gerber (character created by: Howard the Duck), Val Mayerik (character created by: Howard the Duck)</h5>
                </div>
              </div>
            </div>


            </div>
          </div>



      <div id="ratings" class="container tab-pane">
        <div class="container col-lg-12">

          <div class="row">
            <div class="col-lg-3">
              <div  class="text-center">
                <h1>Box Office</h1>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="d-flex justify-content-left">
                <h5>$270,592,504</h5>
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
                <h5>Nominated for 2 Oscars. Another 52 wins & 99 nominations.</h5>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3">
              <div  class="text-center">
                <h1>Ratings</h1>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="d-flex justify-content-left">
                <h5>IMBD RATINGS And Votes</h5>
                <h5>IMBD Rating: 8.1</h5>
                <h5>Number of Votes: 936,430</h5>
              </div>
            </div>
          </div>
       </div>
      </div>

          <div id="reviews" class="container tab-pane">
            <div class="container">
              <div class="row">
                <div class="col-lg-3">
                  <div>
                    <h1>$Username</h1>
                  </div>
                </div>
               <div class="col-lg-9">
                  <div>
                    <h5>$Review</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>


    <? include_once '../footer.php'; ?>


    EOT;
    $movie_url =  strtolower(preg_replace('/\s+/', '_',$movie->Title));
    $myfile = fopen("process/film/{$movie_url}.php", "w") or die("Unable to open file!");
    fwrite($myfile, $mystringstate);
    fclose($myfile);



    <!-- Original FIle Below -->
<!--

    $mystringstate = <<< EOT
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>movie->Title</title>

            <!-- Latest compiled and minified CSS -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->

        <!-- jQuery library -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

        <!-- Popper JS -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->

        <!-- Latest compiled JavaScript -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

        <!-- <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative" rel="stylesheet"> -->
        <!-- <link rel="stylesheet" href="../../css/moviePage.css">

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
        <!-- <div class="tab-content">
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
                    <div class="d-flex justify-content-left">
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
                    <div class="d-flex justify-content-left">
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
        </html>  -->

    <!-- EOT;
    $movie_url =  strtolower(preg_replace('/\s+/', '_',$movie->Title));
    $myfile = fopen("process/film/{$movie_url}.php", "w") or die("Unable to open file!");
    fwrite($myfile, $mystringstate);
    fclose($myfile); -->
    ?>
