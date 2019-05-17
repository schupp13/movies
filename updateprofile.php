<?session_start();?>
<? include_once 'header.php'; ?>

<title>MushyBanana Update Profile</title>

<!--==========================
  Hero Section
============================-->
<section id="hero">
  <div class="hero-container" style="background: url(img/thor.jpg); background-size: cover; background-repeat: no-repeat;">
    <h1>Marvel Cinema</h1>

<h1>Hello <?=$_SESSION['firstName']?></h1>
<h2>Please update your profile informaiton below TEST.</h2>

    <!-- <a href="#reviews" class="btn-get-started">Movies</a> -->
  </div>
</section>
<!--==========================
  End Hero Section
============================-->

<!-- update profile form -->

              <section>
    <div id="update" class="container-fluid">
      <div class="form-group">
        <div class="col-md-12">
          <form action="process/updateprofileprocess.php" method="POST">

              <input type="hidden" name="updateid" value="<?=$_SESSION['id']?>">

              <h1><strong>Your Profile:</strong></h1>

              <h6><strong>First Name:</strong></h6>
              <input type="text" name="updatefirstname" <? if(isset( $_SESSION["firstName"])) { echo 'value="'.$_SESSION['firstName'].'"'; } ?> size="25" required>

              <h6><strong>Last Name:</strong></h6><br>
              <input type="text" name="updatelastname" <? if(isset($_SESSION['lastName'])) { echo 'value="'.$_SESSION['lastName'].'"'; } ?> size="25" required>

              <h6><strong>Email:</strong></h6>
                <input type="text" name="updateemail" <? if(isset($_SESSION['email'])) { echo 'value="'.$_SESSION['email'].'"'; } ?>   size="35" required >

              <h6><strong>Username:</strong></h6>
              <input type="text" name="updateusername" <? if(isset( $_SESSION["userName"])) { echo 'value="'. $_SESSION["userName"].'"'; } ?>  required><br>


                <p><input type="submit" name="updateprofile" value="Update"></p>


               </form>
             </div>
           </div>
           <div class="form-group">
              <div class="col-md-12">
                 <form action="yourProfile.php" method="POST">
                  <p><input type="submit" name="cancelchanges" value="Cancel" style="margin-top: 5px;"></p>
                 </form>
              </div>
            </div>
        </div>
   </section>

   <!-- end update profile form -->

<? include_once 'footer.php'; ?>
