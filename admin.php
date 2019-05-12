<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="jumbotron">
  <h1>Mushy Bannana Admin Page</h1>
  <p>Add/Edit site content and remove users.</p>
</div>
  <?php if(isset($_SESSION['movieAdd'])){
    echo $_SESSION['movieAdd'];
    $_SESSION['movieAdd'] = '';
  }?>
   <div class="container">
     <div class="form-group">
       <div class="col-md-12">
         <form action="process/movieProcess.php">
            <legend>Add a Movie</legend>

            <?if(isset($_SESSION['imdbError'])){
              echo $_SESSION['imdbError'];
              $_SESSION['imdbError'] = '';
            }?>
            <?if(isset($_SESSION['dbError'])){
              echo $_SESSION['dbError'];
              $_SESSION['dbError'] = '';
            }?>
           <div class="form-group">
             <label for="title">IMDB: </label>
             <input id="imdb"type="text" name="imdb" size="50" >
           </div>
           <div class="form-group">
             <label for="dor">Watch Order:</label>
             <input type="text" name="watchOrder" size="4">
           </div>
           <div class="form-group">
             <label for="dor">Marvel Type:</label>
             <select name="type">
                 <option value="Captain America">Captain America</option>
                 <option value="Captain Marvel">Captain Marvel</option>
                 <option value="Iron Man">Iron Man</option>
                 <option value="Hulk">Hulk</option>
                 <option value="Thor">Thor</option>
                 <option value="Avengers">Avengers</option>
                 <option value="Guardians of the Galaxy">Guardians of the Galaxy</option>
                 <option value="Ant-man">Ant-man</option>
                 <option value="Doctor Strange">Doctor Strange</option>
                 <option value="Spider-Man">Spider-Man</option>
                 <option value="Black Panther">Black Panther</option>
             </select>
           </div>
           <button type="submit" class="btn btn-primary">Submit</button>
         </form>
         <br><br><br>


  </body>
</html>
