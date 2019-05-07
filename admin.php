<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php if(isset($_SESSION['movieAdd'])){
    echo $_SESSION['movieAdd'];
    $_SESSION['movieAdd'] = '';
  }?>
  <section class="probootstrap-section probootstrap-section-colored" style="padding-bottom:1px;">
       <div class="container">
         <div class="row">
           <div class="col-md-12 section-heading probootstrap-animate">
             <h1 style="font-size:66px;font-family: 'Domine', serif;background-color:#4db8ff;text-align:center;"><strong>Mushy Bananas Movie Insert</strong></h1>
           </div>
         </div>
       </div>
     </section>

 <!-- ******************************************
 InpurForm
 ******************************************* -->
 <section>

   <!---form for registration--->



   <div class="container-fluid" style="padding-left:100px;font-size:25px;font-family: 'Domine', serif;color:black;background-color:#cccc00; border: 1px solid black;">
     <div class="form-group">
       <div class="col-md-6">
         <form action="movieprocess.php" method="POST">
             <br>
             <br>

             <strong>Movie Title:</strong><br>
             <input type="text" name="title" size="50" ><br><br>

             <strong>Description :</strong><br><br>
             <textarea name='description' rows="5" cols= "100">Enter Movie Description here...</textarea><br> <br>

             <strong>Stars:</strong><br><br>
             <textarea name="actors" rows="5" cols="100"size>List stars here...</textarea><br><br>

             <strong>Release date:</strong><br>
             <input type="text" name="dor" size="15" ><br><br>

             <strong>Watch Order:</strong><br>
             <input type="text" name="watchOrder" size="4" ><br><br>

             <strong>Choose Hero:</strong><br>
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

             <br><br>
             <strong>Movie Poster</strong><br>
             <input type="text" name="image" size="25" ><br><br>


             <p><input type="submit" name="movieadd" value="Press to add movie"  style="text:#cccc00; font-family: 'Domine', serif; box-shadow: #6E7849 0px 0px 10px; color:black;width:300px; height:70px; border-radius:50px;font-size:22px; background-color:#4db8ff; border:1.25px solid gray;"></p>

             <br><br>
           </div>
         </div>
       </div>

                 </form>

     <script src="js/scripts.min.js"></script>
     <script src="js/main.min.js"></script>
     <script src="js/custom.js"></script>
  </body>
</html>
