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
    <link rel="stylesheet" href="../../css/moviePage.css">

  </head>
  <body>
    <div class="container text-center">
    <h1 class="movieTitle"></h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img class="moviePoster" src="" alt=""><br>

      </div>
      <div class="col-sm-6 align-content-left justify-content-left">
      <p class='plot'><p>

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
                  <h3></h3>
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
                  <h5></h5>
                  <h1>Produced by</h1>
                  <h5></h5>
                </div>
              </div>
              <div class="col-lg-9">
                <div "class="d-flex justify-content-left">
                  <h1>Writers</h1>
                  <h5></h5>
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
                  <h5></h5>
                  <h1>Awards</h1>
                  <h5></h5>
                </div>
              </div>
              <div class="col-lg-9">
                <div "class="d-flex justify-content-left">
                  <h1>Ratings</h1>
                  <h5>IMBD RATINGS And Votes</h5>
                  <h5>IMBD Rating: </h5>
                  <h5>Number of Votes: </h5>
                </div>
            </div>
            </div>
          </div>
      </div>
    </body>
    </html>
