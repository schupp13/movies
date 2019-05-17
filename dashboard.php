<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mushy Banana</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/dashboard.css">

  </head>
  <body>
    <div class="jumbotron ">
      <div class="container text-center">


        <img src="img/marvel.png" alt=""><br>
      </div>
    </div>
    <div class="container ">

      <div class="row">

          <? include 'process/dashboardProcess.php';?>
          <?include 'process/pageBuilderProcess.php'?>

      </div>
    </div>

  </body>
</html>
