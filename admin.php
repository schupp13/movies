<?php session_start();?>
<? if(!isset($_SESSION['admin'])){
  header('Location:http://movies.schupp.webfactional.com/index.php');
}?>
<? include 'header.php'; ?>

  <?php if(isset($_SESSION['movieAdd'])){
    echo $_SESSION['movieAdd'];
    $_SESSION['movieAdd'] = '';
  }?>
  <br>
  <br>
  <!--==========================
   Hero Section
 ============================-->
 <section id="hero">
   <div class="hero-container" style="background: url(img/avengershero2.jpg); top center; background-size: cover;">
     <h1>Marvel Cinema</h1>

     <?   if(isset($_SESSION["firstName"])){
      echo '<h1>Welcome '.$_SESSION["firstName"]. ' ' .$_SESSION["lastName"].'!</h1><br>';
      echo '<p style="color:white; font-size:30px;">Check out your favorite Marvel movies below and leave a review.</p>';
}  ?>

     <!-- <a href="#portfolio" class="btn-get-started">Movies</a> -->
   </div>
 </section>

  <section id="facts">
    <div class="wow fadeIn">
      <div class="container-fluid col-lg-12" style="background-color: white; padding: 70px 0;">
        <div class="section-header">
          <h3 class="section-title">Live Feed</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row counters">

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>User</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Reviews</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Total Movie Hours</p>
          </div>

          <!-- <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
          </div> -->

        </div>
       </div>
      </div>
    </section><!-- #facts -->

<section id="admin">

   <div class="container-fluid" style="border-top:2px solid #facf11;">
     <div class="row">
       <div class="col-lg-12 text-center">
         <h1><strong>Add a Movie to the site</strong></h1>
       </div>
     </div>

     <div class="row">
       <div class="col-lg-6 text-center align-left">
         <form action="adminProcess/imdbProcess.php" method="get">
            <legend>Search the IMDB:</legend>
           <div class="form-group">
             <label for="title">IMDB: </label>
             <input id="imdb" type="text" name="imdb" size="50" >
           </div>

           <button type="submit" class="btn btn-secondary">Search</button>
         </form>
         </div>
           <div class="col-lg-6 text-center align-left">
             <?if($_SESSION["imdbFail"]){
               echo $_SESSION["imdbFail"];
               $_SESSION["imdbFail"] = '';
             }?>

             <?if($_SESSION["movieAdded"]){
               echo $_SESSION["movieAdded"];
               $_SESSION["movieAdded"] = '';
             }?>


             <?if($_SESSION['movieTitle'] != ''){?>


               <img src="<?=$_SESSION['moviePoster']?>" alt="">
               <h1><?=$_SESSION['movieTitle']?></h1>
                <h1><?=$_SESSION['movieImdb']?></h1>


                  <div id="form" class="d-flex justify-content-around">
                    <div><form class="" action="adminProcess/insertMovie.php" method="post">
                      <div class="form-group">
                        <label for="">Marvel Type:</label>
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
                        <input type="hidden" name="image" value="<?=$_SESSION['moviePoster']?>">
                        <input type="hidden" name="title" value="<?=$_SESSION['movieTitle']?>">
                        <input type="hidden" name="imdb" value="<?=$_SESSION['movieImdb']?>"><br>
                        <button type="submit" class="btn btn-secondary">Add Movie</button>

                      </div>
                    </form>
                  </div>
                  <form class="" action="adminProcess/adminClear.php" method="post">
                    <div class="form-group">
                      <input type="hidden" name="" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">Don't ADD: Clear Form</button>
                </form>
                  </div>


             <?} else{
               ?>Movie Will Appear Here.<?

             }?>
           </div>
         </div>
       </div>

        <div class="container-fluid" style="border-top:2px solid #facf11;">
          <div class="row">
            <div class="col-lg-12 text-center">
                <h1><strong>Remove a Movie From the Site</strong></h1>
                <?if($_SESSION["movieDeleted"]){
                  echo $_SESSION["movieDeleted"];
                  $_SESSION["movieDeleted"] = '';
                }?>

                <?if($_SESSION["notInDB"]){
                  echo $_SESSION["notInDB"];
                  $_SESSION["notInDB"] = '';
                }?>


            </div>

          </div>

           <div class="row" >

             <div class="col-md-6 text-center align-left">
               <form action="adminProcess/movieTableProcess.php">
                  <legend>Search for Movie in MushyBananas DB</legend>
                 <div class="form-group">
                   <label for="title">IMDB: </label>
                   <input id="imdb"type="text" name="imdb" size="50" >
                 </div>
                 <button type="submit" class="btn btn-secondary">Search</button>
               </form>
            </div>
            <div class="col-md-6 text-center align-left">
              <?if($_SESSION['deletemovieid'] != ''){?>

                <img src="<?=$_SESSION['deletemovieimage']?>" alt="" style="width:400px;">
                <h1>Title: <?=$_SESSION['deletemovietitle']?></h1>
                 <h1>ID: <?=$_SESSION['deletemovieid']?></h1>
                 <div id="form2" class=" d-flex justify-content-around align-items">
                   <form class="" action="adminProcess/deleteMovie.php" method="post">
                     <div class="form-group">
                       <input type="hidden" name="imdb" value="<?=$_SESSION['deletemovieimdb']?>"><br>
                   <button type="submit" class="btn btn-daner">Delete Movie</button>
                 </div>
               </form>
               <div class="">
               <form class="" action="adminProcess/adminClear.php" method="post">
                 <div class="form-group">
                   <input type="hidden" name="" value="">
                 </div>
              <button type="submit" class="btn btn-primary">Don't Delete: Clear Form</button>
          </form>
        </div>
               </div>



             </div>
               <?} else{
                 ?>Movie Will Appear Here.<?

               }?>

            </div>



        </div>
      </div>
      <div class="container-fluid" style="border-top:2px solid #facf11;">
        <div class="row">
          <div class="col-lg-12 text-center">
              <h1><strong>Remove a comment from the site</strong></h1>
              <?if($_SESSION["noComment"]){
                echo $_SESSION["noComment"];
                $_SESSION["noComment"] = '';
              }?>
              <?if($_SESSION["commentDeleted"]){
                echo $_SESSION["commentDeleted"];
                $_SESSION["commentDeleted"] = '';
              }?>



          </div>
        </div>

         <div class="row" >

           <div class="col-lg-6 text-center align-left">
             <form action="adminProcess/ratingTableProcess.php">
                <legend>Search the rating table</legend>
               <div class="form-group">
                 <label for="comment">Comment id #: </label>
                 <input id="id"type="text" name="id" size="50" >
               </div>
               <button type="submit" class="btn btn-secondary">Search</button>
             </form>
          </div>
          <div class="col-md-6 text-center align-left">
            <?if($_SESSION['commentID'] != ''){?>



              <h1><?=$_SESSION['commentID']?></h1>
               <h1><?=$_SESSION['commentuser']?></h1>
               <p><?=$_SESSION['commentReview']?></p>

               <div id="form3" class="d-flex justify-content-around">
              <div>
                <form class="" action="adminProcess/deleteComment.php" method="post">
                   <div class="form-group">
                     <input type="hidden" name="id" value="<?=$_SESSION['commentID']?>"><br>
               </div>
               <button type="submit" class="btn btn-danger">Delete Comment</button>
             </form>
           </div>
            <div>
              <form class="" action="adminProcess/adminClear.php" method="post">
                <div class="form-group">
                  <input type="hidden" name="" value="">
                </div>
             <button type="submit" class="btn btn-primary">Don't Delete: Clear Form</button>
         </form>
       </div>
             </div>
             <?} else{
               ?>Comment Will Appear Here.<?

             }?>

          </div>



      </div>
    </div>
          <? include 'footer.php'; ?>
