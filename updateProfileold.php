<?session_start();?>
<? include_once 'header.php'; ?>

<title>MushyBanana Update Profile</title>

<!--==========================
  Hero Section
============================-->
<section id="hero">
  <div class="hero-container" style="background: url(img/moviespagebg.png); background-size: cover; background-repeat: no-repeat;">
    <h1>Marvel Cinema</h1>

<h1>Hello <?=$_SESSION['firstName']?></h1>
<h2>Please update your profile informaiton below.W53ZoOVSXmQk</h2>

    <!-- <a href="#reviews" class="btn-get-started">Movies</a> -->
  </div>
</section>
<!--==========================
  End Hero Section
============================-->

<section id="sectionbg">
  <div class="container"><!--wow fadeInUp-->
    <div class="col-lg-12">

      <div class="section-header">
        <h3 class="section-title">Your Profile</h3>
     
      </div>
        </div>
        </div>
        </section>
        <!-- $_SESSION["id"]= $row["id"];
            $_SESSION["firstName"] = $row["firstName"];
            $_SESSION["lastName"] = $row["lastName"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["password"] = $row["password"];
            $_SESSION["userName"] = $row["userName"];
            if( $row["admin"] == 1){
              $_SESSION["admin"] = $row["admin"]; -->
        
              <section>
    <div class="container-fluid" style="border: 1px solid black;background-color:black">
      <div class="form-group">
        <div class="col-md-12">
          <form action="updateprofileprocess.php" method="POST">
              <br>
              <br>
              
              <strong>First Name:</strong> <br>
              <input type="text" name="firstname" <? if(isset( $_SESSION["firstName"])) { echo 'value="'.$_SESSION['firstName'].'"'; } ?> size="25" required><br><br>

              <strong>Last Name:</strong><br>
              <input type="text" name="lastname" <? if(isset($_SESSION['lastName'])) { echo 'value="'.$_SESSION['lastName'].'"'; } ?> size="25" required><br><br>
              
              <strong> Email:</strong><br>
                <input type="text" name="address" <? if(isset($_SESSION['email'])) { echo 'value="'.$_SESSION['email'].'"'; } ?>   size="35" required ><br> <br>

              <strong>Username:</strong><br>
              <input type="text" name="city" <? if(isset( $_SESSION["userName"])) { echo 'value="'. $_SESSION["userName"].'"'; } ?>  required><br> 

                <br> <br>
         

                <p><input type="submit" name="updateprofile" value="Save your changes"  style="text:black;color:black;width:250px; height:40px; border-radius:50px;font-size:14px; background-color:yellow;"></p> 
                
                <p><input type="submit" name="cancelchanges" value="Cancel changes"  style="text:black;color:black;width:250px; height:40px; border-radius:50px;font-size:14px; background-color:yellow;"></p> 

              </div>
            </form>
           </div>
        </div>  
   </section>

<? include_once 'footer.php'; ?>
